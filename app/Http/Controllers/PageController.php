<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {   
        //mau ambil data dari tabel fotouploader pada tabvle posts
        $fotouploader= DB::table('posts')->get();

        // mengirim ke halaman home untuk ditampilkan data
        return view('index', ['fotouploader' => $fotouploader]);
    }

    public function createFile()
    {
        return view('page.create-file');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $folder = 'post_images';
        $image = $request->file('image');
        $imageName = time(). '_' .$image->getClientOriginalName();
        $image->move($folder, $imageName);

        $post_ref = 
        DB::table('posts')->insert([
            'image' => $imageName,
            'caption' => $request->caption
        ]);

        if ($post_ref) {
            return redirect('/')->with('status', 'Image Uploaded Successfully');
        }
        else {
            return redirect('/create-file')->with('status', 'Image Uploaded Failed');
        }

    }

    public function editPost($id)
    {   
        // ambil data postingan dari tabel posts
        $fotouploader= DB::table('posts')->where('id', $id) ->get();

        // passing data ke view edit-post
        if($fotouploader){
            return view('page.edit', ['fotouploader' => $fotouploader]);
        }else{
            return redirect('/')->with('status', 'Post Not Exist');
        }
    }

    public function updatePost(Request $request, $id)
    {   
        $key = $id;
        
        $updateData = [
            'caption' => $request->caption,
        ];

        $update_ref = DB::table('posts')->where('id', $id)->update($updateData);

        if ($update_ref) {
            return redirect('/')->with('status', 'Post Updated Successfully');
        }
        else {
            return redirect('/')->with('status', 'Post Updated Failed');
        }
    }

    public function deletePost($id)
    {
        $delete_ref = DB::table('posts')->where('id', $id)->delete();

        if ($delete_ref) {
            return redirect('/')->with('status', 'Post Deleted Successfully');
        }
        else {
            return redirect('/')->with('status', 'Post Deleted Failed');
        }
    }
}
