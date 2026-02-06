@extends('frontend.layout.default')
@if($pagemeta)
	 @section('title', $pagemeta->page_title)
	 @section('pageDescription', $pagemeta->page_description)
	 @section('pageKeyword', $pagemeta->page_keywords)
 @else
	 @section('title', 'Profound Videos')
	 @section('pageDescription', 'Profound Videos')
	 @section('pageKeyword', 'Profound Videos')
 @endif
@section('content')


<style>
.luxury-home .image img {
    height: 626px;
    object-fit: cover;
}
.flat-title.inner-page::after {
    content: '';
    background: #0000004d;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    border-radius: 20px;
    right: 0;
}
ul.list {
    flex-direction: column;
}
ul.list li {
    display: flex;
    align-items: center;
    font-size: 15px;
    gap: 9px;
}
.features-box-image.icon {
    background: #e7c873;
    padding: 6px 5px;
    width: 25px;
    border-radius: 52px;
    height: 25px;
}
.pt-10{
padding-top:50px;
}
.mt-10{
margin-top:50px;
}
.py-50{
padding:50px 0 !important;
}
.py-100{
padding:100px 0 !important;
}
.my-50{
margin:50px 0 !important;
}
@media(max-width:768px){
.luxury-home .image img {
    height: 350px;
}
.popup-content{
width: 90% !important;
    height: 50% !important;
}
}

 .popup {
     display: none;
     position: fixed;
     top: 0;
     left: 0;
     z-index:111;
width: 100%;
     height: 100%;
     background-color: rgba(0, 0, 0, 0.8);
     justify-content: center;
     align-items: center;
 }
 .popup-content {
     text-align: center;
     position: absolute;
    top: 50%;
    left: 50%;
    width: 50%;
    height: 60%;
    transform: translate(-50%, -50%);
 }

</style>

  <div class="main-content px-20 default">

                <div class="space-20"></div>

                <!-- flat-title -->
                <section class="flat-title inner-page" style="background:url('{{  ($banner != null) ? asset($banner->image) :  asset('frontend/assets/images/image-3.webp') }}');background-repeat:no-repeat;background-size:cover;">
                    <div class="cl-container full">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h2>Profound Videos</h2>
                                    <ul class="breadcrumbs">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li>/</li>
                            <li class="breadcrumb-item active" aria-current="page">Profound Videos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /flat-title -->

                <script>
              // Replace these variables with your details
const apiKey = "AIzaSyDaOX9haNpFzebUD7Wcy7Oj0-1qzzpegI0";
const channelId = "UCqBKJFBIpZBkPndIPfwj7lw";

// Function to fetch videos from the YouTube API
async function fetchYouTubeVideos() {
    const apiUrl = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&channelId=${channelId}&part=snippet&type=video&maxResults=100&order=date`;

    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error(`Error fetching data: ${response.statusText}`);
        }

        const data = await response.json();
        displayVideos(data.items);
    } catch (error) {
        console.error("Error fetching videos:", error);
        document.getElementById("video-container").innerHTML = `<p>Failed to load videos. Please try again later.</p>`;
    }
}

// Function to display videos as cards on the web page
function displayVideos(videos) {
    const videoContainer = document.getElementById("video-container");
    videoContainer.innerHTML = ""; // Clear previous content

    videos.forEach((video) => {
        const videoElement = document.createElement("div");
        videoElement.classList.add("col-md-3","col-12");

        videoElement.innerHTML = `
                                        <div class="wg-blog wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;" onclick="openPopup('${video.id.videoId}')">
                                            <div class="image">
                                                <img src="${video.snippet.thumbnails.high.url}" alt="${video.snippet.title}">
                                            </div>
                                            <div class="content">
                                                <div class="name">
                                                    <a style="cursor: pointer;" onclick="openPopup('${video.id.videoId}')">${video.snippet.title}</a>
                                                    <p>${video.snippet.description.substring(0, 100)}...</p>
                                                </div>
                                                <a style="cursor: pointer;" class="tf-button-no-bg" onclick="openPopup('${video.id.videoId}')">
                                                    Check Out
                                                    <i class="icon-arrow-right-add"></i>
                                                </a>
                                            </div>
                                        </div>`;

        videoContainer.appendChild(videoElement);
    });
}

// Function to open a popup with the video
function openPopup(videoId) {
    const popup = document.getElementById("video-popup");
    const popupContent = document.getElementById("popup-content");

    popupContent.innerHTML = `
        <iframe 
            width="100%" 
            height="100%" 
            src="https://www.youtube.com/embed/${videoId}" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    `;

    popup.style.display = "block";
}

// Function to close the popup
function closePopup() {
    const popup = document.getElementById("video-popup");
    popup.style.display = "none";
}

// Call the fetchYouTubeVideos function on page load
window.onload = () => {
    fetchYouTubeVideos();
};
                </script>

                                    <section class="py-100">
                                    <div class="cl-container">
                                    <div class="row" id="video-container">
                                    
                                    </div>
                                </div>
                                </section>

<div id="video-popup" class="popup" onclick="closePopup()">
 <div class="popup-content" id="popup-content"></div>
</div>


                            </div>
  
@endsection