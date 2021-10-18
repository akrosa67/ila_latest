 // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyB6p_z1sUqiVvNwVFmzbaBujTjgqIsM8mY",
    authDomain: "indolaw-associates.firebaseapp.com",
    projectId: "indolaw-associates",
    storageBucket: "indolaw-associates.appspot.com",
    messagingSenderId: "772447660818",
    appId: "1:772447660818:web:ea8c8e03d55c198019e1cb",
    measurementId: "G-2KSQPKJK1M"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  var URL = $('meta[name="baseURL"]').attr('content');

  console.log("Firebase started.");

  // Facebook
  var facebookProvider = new firebase.auth.FacebookAuthProvider();

  var googleProvider = new firebase.auth.GoogleAuthProvider();
