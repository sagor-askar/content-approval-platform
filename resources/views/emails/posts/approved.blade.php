@component('mail::message')
# Congratulations 🎉

Your post titled **"{{ $post->title }}"** has been approved by the admin.

Thanks for contributing to our platform.

@component('mail::button', ['url' => route('posts.show', $post->id)])
View Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
