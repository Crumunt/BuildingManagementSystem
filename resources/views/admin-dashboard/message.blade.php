@extends('layouts.app-layout')

@push('css')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


@section('dashboard-content')
<div class="flex h-3/4 border-2 border-slate-500 rounded-xl overflow-hidden">
    <!-- Sidebar -->
    <div class="w-1/4 h-full bg-white shadow-md flex flex-col bg-gradient-to-b from-slate-300 to-slate-500">
        <div class="p-4 border-b">
            <input type="text" placeholder="Search..." class="w-full p-2 border rounded-md" />
        </div>
        <div class="flex-1 p-4 overflow-y-auto no-scrollbar">
            <h2 class="text-lg font-semibold mb-2">Recent Chats</h2>
            <ul>
                <x-chat.chat-icon chatID="Emma Johnson" />
                <x-chat.chat-icon chatID="Liam Brown" />
                <x-chat.chat-icon chatID="Ava Smith" />
                <x-chat.chat-icon chatID="Noah Davis" />
                <x-chat.chat-icon chatID="Olivia Wilson" />
                <x-chat.chat-icon chatID="Lucas Martinez" />
                <x-chat.chat-icon chatID="Sophia Anderson" />
                <x-chat.chat-icon chatID="Mason Thomas" />
                <x-chat.chat-icon chatID="Isabella Taylor" />
                <x-chat.chat-icon chatID="Ethan Moore" />
                <x-chat.chat-icon chatID="Mia Harris" />
                <x-chat.chat-icon chatID="James Garcia" />
                <x-chat.chat-icon chatID="Amelia Lewis" />
                <x-chat.chat-icon chatID="Benjamin Lee" />
                <x-chat.chat-icon chatID="Harper Clark" />
                <x-chat.chat-icon chatID="Alexander Walker" />
                <x-chat.chat-icon chatID="Charlotte hall" />
                <x-chat.chat-icon chatID="Daniel Allen" />
                <x-chat.chat-icon chatID="Ella Young" />
                <x-chat.chat-icon chatID="Michael King" />
            </ul>
        </div>
    </div>

    <!-- Chat Area -->
    <div class="flex-1 flex flex-col">
        <div class="p-4 overflow-y-auto bg-white shadow-md flex flex-col gap-2 h-full bg-gradient-to-b from-slate-300 to-slate-500">

            <!-- Add more chat messages here -->
            <div
                class="justify-center align-center mx-auto my-auto p-7 rounded-xl bg-red-300 shadow-lg">
                <p class="text-2xl text-gray-600 text-center font-semibold">It appears there hasn&apos;t been a
                    conversation with this user yet.
                </p>
                <p class="text-lg text-gray-600 text-center">Start messaging now to ask questions, share ideas, or get
                    the help you need!
                </p>
            </div>
        </div>
        <div class="p-4 border-t bg-slate-500">
            <input type="text" placeholder="Type a message..." class="w-full p-2 border rounded-md" />
        </div>
    </div>
</div>
@endsection