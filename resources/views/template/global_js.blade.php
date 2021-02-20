<script>
    window._asset = '{{ asset('') }}';
</script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyCsfGbIJyPf1HLRIYHIaP4rNTvXOsqdS7Q",
        authDomain: "cvmaik.firebaseapp.com",
        projectId: "cvmaik",
        storageBucket: "cvmaik.appspot.com",
        messagingSenderId: "891188486152",
        appId: "1:891188486152:web:166cee7a0720c1932ef1bd",
        measurementId: "G-N1BQ76QCR6"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
<script src="{{asset("js/app.js")}}"></script>
