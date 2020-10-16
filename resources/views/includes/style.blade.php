<style>
    /* GLOBAL */
    html {
        scroll-behavior: smooth;
    }

    main {
        min-height: calc(100vh - 286px);
    }

    body {
        font-family: 'Nunito';
    }

    h2 {
        font-size: 2.5rem;
    }

    /* / GLOBAL */

    /* HEADER */

    header {
        min-height: 70vh;
        background-attachment: fixed;
    }

    h1 {
        font-size: 5rem;
    }

    /* HEADER */

    /* NAVBAR */

    .navbar-brand {
        font-size: 2rem;
    }

    .nav-link {
        font-size: 1.2rem;
    }

    /* / NAVBAR */

    /* POSTS ON MAIN PAGE */

    .post-image,
    .first-image,
    .image {
        height: 250px;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .first-image {
        height: 400px !important;
    }

    .image {
        height: 600px !important;
    }

    .translatey:hover h3 {
        transform: translateY(5px);
        transition: all 0.4s;
    }

    .translatey:hover p {
        transform: translateY(-5px);
        transition: all 0.4s;
    }

    /* / POSTS ON MAIN PAGE */

    /* ABOUT PAGE */

    .about p {
        font-size: 1.2rem;
    }

    .about-image {
        width: 100%;
        height: 300px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .about-image1 {
        background-image: url(https://picsum.photos/id/247/300/300);
    }

    .about-image2 {
        background-image: url(https://picsum.photos/id/547/300/300);
    }

    .about-image3 {
        background-image: url(https://picsum.photos/id/267/300/300);
    }

    /* / ABOUT PAGE */
</style>