<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Resources\V1\PostCommentResource;
use App\Models\Comment;
use App\Models\Post;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Post $post
     * @param Comment $comment
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Post $post, Comment $comment)
    {
        return PostCommentResource::collection(Comment::where('post_id', $post->id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return PostCommentResource
     */
    public function store(StoreCommentRequest $request, Post $post)
    {
        $comment = Comment::create($request->all() + ['post_id' => $post->id]);
        return new PostCommentResource($comment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return PostCommentResource
     */
    public function show(Post $post, Comment $comment)
    {
        return new PostCommentResource($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return PostCommentResource
     */
    public function update(UpdateCommentRequest $request, Post $post, Comment $comment)
    {
        $comment->update($request->all());

        return new PostCommentResource($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();
        return response('Successfully delete comment', 204);
    }
}
