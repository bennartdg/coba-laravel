<?php

namespace App\Models;

class Post
{
	private static $blog_post = [
		[
			"title" => "Judul Post Pertama",
			"slug" => "judul-post-pertama",
			"author" => "Bennart Gunawan",
			"body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime facere mollitia cumque molestias magni doloremque provident explicabo nemo dolorem dignissimos!"
		],
		[
			"title" => "Judul Post Kedua",
			"slug" => "judul-post-kedua",
			"author" => "Mamang Nurjaman",
			"body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita similique modi, illo nisi ullam amet velit atque eligendi id at! Vel placeat dicta minima eligendi? Optio officia a culpa quas."
		]
	];

	public static function all()
	{
		return collect(self::$blog_post);
	}

	public static function find($slug)
	{
		$posts = static::all();

		return $posts->firstWhere('slug', $slug);
	}
}
