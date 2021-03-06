<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Sathish';
		$last = 'Sengodan';

		$full = $first . " " . $last;
		$email = 'sathish@valli.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $full;

		//return view('pages.about')->withFullname($full)->withEmail($email);
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}
}