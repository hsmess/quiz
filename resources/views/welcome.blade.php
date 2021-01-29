<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Quiz</title>

    </head>
    <body>
    <div class="bg-white min-h-screen">
        <div class="relative bg-grey-900" style="min-height:100vh;">
            <div class="absolute inset-0">
                <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-900">
                </div>
            </div>
            <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
                <div class="bg-gray-900 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                    <div>
                        <img class="h-11 w-auto" src="https://www.image-plus.co.uk/wp-content/themes/imageplus/img/logo@2x.png" alt="Workflow">
                    </div>
                    <div class="max-w-lg mx-auto pt-4">
                        <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
                            Welcome to your quiz!
                        </h2>
                        <p class="mt-3 text-lg leading-6 text-gray-500">
                            Please find a place for you and your team to chat - you can make a new Google Meet
                        </p>

                        <p class="mt-6 text-base text-gray-500">
                            Need to ask a question to the host? use the #quiz channel on the Image Plus Slack
                        </p>
                    </div>
                </div>
                <div class="bg-grey-900 py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                    <div class="max-w-lg mx-auto lg:max-w-none">
                        <div class="relative rounded-2xl px-6 py-10 bg-purple-900 overflow-hidden shadow-xl sm:px-12 sm:py-20 border-purple-900 border-4" style="padding-top: 56.25%" >
                            <video class="absolute inset-0 w-full h-full" id="myVideo" controls></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer section -->
        <footer class="mt-24 bg-white sm:mt-12">
            <div class="mx-auto max-w-md py-12 px-4 overflow-hidden sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <p class="mt-8 text-center text-base text-white">
                    &copy; 2021 Image Plus Ltd
                </p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script>
        (function(){
            // Replace with your asset's playback ID
            var playbackId = "hNwShdA23WLRXkoCJAuceJdlA1u024LZwRR9sqrGdmLY";
            var url = "https://stream.mux.com/" + playbackId + ".m3u8";
            var video = document.getElementById("myVideo");

            // Let native HLS support handle it if possible
            if (video.canPlayType('application/vnd.apple.mpegurl')) {
                video.src = url;
            } else if (Hls.isSupported()) {
                // HLS.js-specific setup code
                hls = new Hls();
                hls.loadSource(url);
                hls.attachMedia(video);
            }
        })();
    </script>
    </body>
</html>
