@props(['chatID' => 'null'])

<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <li class="p-2 hover:bg-gray-200 rounded-md cursor-pointer flex gap-2.5">
        <img class="w-8 h-8 rounded-full" src="{{asset('assets/images/temp-chat-image.jpg')}}" alt="Jese image">
        <span>{{$chatID}}</span>
    </li>
</div>