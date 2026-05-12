<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ApiService
{
	private static function fetch($endpoint, $params = [])
	{
		$queryParams = array_merge([
			'per_page' => 100, // default
		], $params);

		$response = Http::withHeaders([
			'Authorization' => 'Basic ' . config('services.api.token'),
			'Accept' => 'application/json',
		])->get(config('services.api.base_url') . $endpoint, $queryParams);

		// You can also get all headers as an array useful for pagination
		$headers = $response->headers();

		return $response->json();
	}

	public static function getAllPosts()
	{
		//return self::fetch('/posts');
		$cache_key = 'blog-posts';

		return Cache::remember($cache_key, now()->addMinutes(60), function () {
			return self::fetch('/posts');
		});
	}

	public static function getPostBySlug(string $slug)
	{
		$cache_key = 'blog_post_' . $slug;

		$posts = self::fetch('/posts', [
			'slug' => $slug,
		]);

		return $posts[0];
	}
}
