<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        // Delete the photo from storage
        Storage::delete($photo->path);

        // Delete the photo from the database
        $photo->delete();

        // Redirect back with a success message
        return back()->with('success', 'Photo deleted successfully.');
    }
}
