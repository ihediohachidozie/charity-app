<x-mail::message>
Hi {{$name}},
<p>
    Thank you so much for your generous gift! It’s donors like you that make our work possible. <br>
    Your contribution is enabling us to accomplish {{$goal}}, as well as helping us make progress
    toward our organization’s cause.
</p>
<p> We’re excited that you’ve chosen to help us along our journey and hope for a long and fruitful relationship. <br>
    Thanks again!
</p>




<x-mail::button :url="$url" color="success">
View Receipt
</x-mail::button>

Sincerely, <br>
Moren-O <br>
<span class="text-sm">Goodwill Foundation</span>
{{-- {{ config('app.name') }} --}}
</x-mail::message>
