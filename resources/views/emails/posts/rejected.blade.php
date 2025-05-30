@component('mail::message')
# ❌ Post Rejected

Your post titled "**{{ $post->title }}**" has unfortunately been rejected by the admin.

Please review our content guidelines and consider editing your post.

@component('mail::button', ['url' => route('posts.edit', $post)])
Edit Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
