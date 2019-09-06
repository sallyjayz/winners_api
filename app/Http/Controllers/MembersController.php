<?php
namespace App\Http\Controllers;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller {

    public function createMember(Request $request) {
        $post = Member::create($request->all());
        return response()->json($post);
    }


     public function viewMember($id){
        $post = Member::find($id);
        return response()->json($post);
    }


    public function updateMember(Request $request, $id) {
        $post = Member::find($id);
        $post->title = $request->input('title');
        $post->first_name = $request->input('first_name');
        $post->last_name = $request->input('last_name');
        $post->residential_address = $request->input('residential_address');
        $post->service_unit = $request->input('service_unit');
        $post->year_joined = $request->input('year_joined');
        $post->church_growth_squad = $request->input('church_growth_squad');
        $post->tel_no = $request->input('tel_no');
        $post->whatsapp_tel_no = $request->input('whatsapp_tel_no');
        $post->birth_date = $request->input('birth_date');
        $post->occupation = $request->input('occupation');
        $post->marital_status = $request->input('marital_status');
        $post->created_at = $request->input('created_at');
        $post->updated_at = $request->input('updated_at');
        $post->save();

        return response()->json($post);
    }

    public function deleteMember($id){
        $post = Member::find($id);
        $post->delete();

        return response()->json('Removed successfully.');
    }


    public function index() {
       $post = Member::all();

       return response()->json($post);
    }
}

?>
