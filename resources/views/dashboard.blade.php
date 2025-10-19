<x-app-layout>

        <div id="frame">
            @include('layouts.sidebar')
            <div class="content">
            <div class="blank-wrap" style="width:100%; height:100%; background-color: slategray ; color:aliceblue ;position: relative; z-index: 9999;">
                <div class="inner-blank-wrap" style="position: absolute; top: 50%; left:50%; transform: translate(-50%,-50%);">Select a contact to start messaging</div>
            </div>
                <div class="loader d-none" style="width: 100%; height: 100%; background-color: slategray; position: relative; z-index: 9999;">
                    <div class="loader-inner " style="position: absolute; top: 50%; left:50%; transform: translate(-50,-50)">                        <l-bouncy
                        size="45"
                        speed="1.75"
                        color="yellow"
                        ></l-bouncy>
                    </div>
                </div>
                <div class="contact-profile">
                    <img src="{{ asset('default-images/avatar.jpg') }}" alt="" />
                    <p class="contact-name"></p>
                    <div class="social-media">

                    </div>
                </div>
                <div class="messages">
                    <ul>
                       {{-- Dynamic content will go here  --}}
                    </li>
                    </ul>
                </div>
                <div class="message-input">
                    <form action="" method="POST" class="message-form">
                        @csrf
                        <div class="wrap">
                        <input autocomplete="off" type="text" placeholder="Write your message..." name="message" class="message-box"/>
                        <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </body>
    </html>
    <x-slot name="scripts">
        @vite(['resources/js/app.js','resources/js/message.js']);
</x-app-layout>
