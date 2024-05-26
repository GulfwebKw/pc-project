@foreach($comments as $comment)
    <div class="reply-section-area margin-b30 margin-t32">
        <div class="replyfleex-area">
            <div class="repl-boxarea">
                <div class="replyimg">
                    <img style="border-radius: 50%" src="https://www.gravatar.com/avatar/{{md5(strtolower(trim($comment->email)))}}" alt="">
                </div>
                <div class="reply-text">
                    <a href="#" class="color-29"><h1 class="font-lora font-20 lineh-20 weight-600 color-29 margin-b13">
                            {{ $comment->first_name }} {{ $comment->last_name }}</h1></a>
                    <a href="#" class="color-30"><p class="font-ks font-16 lineh-26 weight-500 color-30">{{ $comment->created_at->format('d F Y') }}</p></a>
                </div>
            </div>
            <a href="#makeComment" class="color-30"><span class="font-ks font-16 weight-600 color-29 lineh-20"><i class="fa-solid fa-reply"></i>Reply</span></a>
        </div>
        <p class="font-ks font-16 lineh-26 weight-500 color-30 ">
            {!! nl2br(e($comment->message)) !!}
        </p>
    </div>
@endforeach
