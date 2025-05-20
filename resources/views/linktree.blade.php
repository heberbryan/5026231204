<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella Poarch | Instagram, Facebook, TikTok | Linktree</title>

    <link rel="shortcut icon" href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon.ico"/>
    <link rel="icon" type="image/png" sizes="16x16" href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon-16x16.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/favicon-32x32.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://assets.production.linktr.ee/profiles/_next/static/logo-assets/apple-icon-180x180.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500;700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        @keyframes stripeBackground {
            0% { background-position: 0 0; }
            100% { background-position: 0 96px; }
        }

        html {
            height: 100%;
        }
        body {
            background-color: transparent;
            font-family: 'Karla', sans-serif;
            color: #000000;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .stripe-background-animated {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: #ffe960;
            background-size: 96px 96px;
            background-image: linear-gradient(
                45deg,
                #ffe960 25%,
                #ffe546 25%,
                #ffe546 50%,
                #ffe960 50%,
                #ffe960 75%,
                #ffe546 75%,
                #ffe546 100%
            );
            animation: stripeBackground 4s linear infinite;
        }

        .header-nav {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            max-width: 580px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            padding: 1rem 1rem 0 1rem;
        }

        .header-button {
            background-color: rgba(26, 26, 26, 0.35);
            border: none;
            width: 40px;
            height: 40px;
            padding: 0;
            color: white;
            font-size: 1.2rem;
        }
        .header-button:hover {
            background-color: rgba(26, 26, 26, 0.25);
            color: white;
        }
         .header-button:active {
             background-color: rgba(128, 128, 128, 0.5);
             color: white;
         }

        .profile-container {
            max-width: 580px;
            margin: auto;
            padding-top: 5rem;
            padding-bottom: 2rem;
            flex-grow: 1;
            padding-left: 1rem;
            padding-right: 1rem;
            position: relative;
            z-index: 1;
        }

        .profile-picture {
            width: 96px;
            height: 96px;
        }

        .profile-title {
            font-family: 'Karla', sans-serif;
            font-weight: 700;
            font-size: 1.25rem;
            color: #000000;
        }

         .verification-badge {
             width: 20px;
             height: 20px;
             margin-left: 0.25rem;
             vertical-align: middle;
         }

        .profile-description {
            font-family: 'Karla', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            color: #000000;
            line-height: 1.5;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 0.5rem;
            padding: 0.5rem;
            transition: transform 0.2s ease-in-out;
        }
        .social-icons a:hover {
            transform: scale(1.1);
        }
        .social-icons a svg {
             width: 32px;
             height: 32px;
             fill: #000000;
             display: block;
        }

        .link-header {
            font-family: 'Karla', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: #000000;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .link-button {
            background-color: #fff0b4;
            color: #000000;
            border: 2px solid #ffda58;
            border-radius: 24px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            box-shadow: 6px 6px 0 0 #ffda58;
            width: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
            overflow: hidden;
            display: block;
        }

        .link-button:hover {
            transform: translate(3px, 3px);
            box-shadow: 3px 3px 0 0 #ffda58;
            color: #000000;
        }

        .link-button.link-classic {
            display: flex;
            align-items: center;
            padding: 1rem;
            min-height: 64px;
            text-align: center;
        }

        .link-button.link-classic .link-thumbnail {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
        }

        .link-button.link-classic .link-text {
            flex-grow: 1;
        }

        .link-button.link-classic.has-thumbnail .link-text {
             padding-left: calc(46px + 1rem);
             padding-right: 1rem;
             text-align: center;
        }
         .link-button.link-classic.no-thumbnail .link-text {
             padding-left: 1rem;
             padding-right: 1rem;
             text-align: center;
         }

         .link-grid-item {
             display: flex;
         }
        .link-button.link-grid {
            display: flex;
            flex-direction: column;
            padding: 0.5rem;
            box-shadow: 4px 4px 0 0 #ffda58;
            min-height: auto;
            height: 100%;
        }

        .link-button.link-grid:hover {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 0 #ffda58;
        }

        .link-button.link-grid .link-thumbnail-grid {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: 18px;
            margin-bottom: 0.5rem;
            margin-right: 0;
        }

        .link-button.link-grid .link-text {
            font-size: 0.875rem;
            text-align: left;
            line-height: 1.2;
             width: 100%;
             display: -webkit-box;
             -webkit-line-clamp: 2;
             -webkit-box-orient: vertical;
             overflow: hidden;
             height: 2.4em;
             padding: 0 0.25rem;
        }

        .link-featured-item {
             display: flex;
        }
        .link-button.link-featured {
            display: flex;
            padding: 0;
            aspect-ratio: 16 / 9;
            background-size: cover;
            background-position: center;
            justify-content: flex-end;
            box-shadow: 4px 4px 0 0 #ffda58;
            border: none;
            min-height: auto;
            height: 100%;
        }

         .link-button.link-featured:hover {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 0 #ffda58;
        }

        .link-button.link-featured .link-text {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0.8));
            color: #ffffff;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            border-bottom-left-radius: 22px;
            border-bottom-right-radius: 22px;
            text-align: left;
            display: -webkit-box;
             -webkit-line-clamp: 2;
             -webkit-box-orient: vertical;
             overflow: hidden;
        }

        .sr-only {
          position: absolute;
          width: 1px;
          height: 1px;
          padding: 0;
          margin: -1px;
          overflow: hidden;
          clip: rect(0, 0, 0, 0);
          white-space: nowrap;
          border-width: 0;
        }

    </style>
</head>
<body>
    <div class="stripe-background-animated"></div>

    <div class="header-nav d-flex justify-content-between align-items-center">
        <button class="btn rounded-circle header-button d-flex align-items-center justify-content-center" aria-label="Notifications">
            <i class="bi bi-bell"></i>
        </button>
        <button class="btn rounded-circle header-button d-flex align-items-center justify-content-center" aria-label="More options">
            <i class="bi bi-three-dots"></i>
        </button>
    </div>

    <div class="container profile-container">
        <div class="text-center mb-4">
            <img src="https://ugc.production.linktr.ee/Cp3veWjnRlGTN1BISFA3_E5L77b1i6cSs5d7s?io=true&size=avatar-v3_0"
                 class="rounded-circle profile-picture mb-3 mx-auto"
                 alt="Bella Poarch Profile Picture"
                 onerror="this.onerror=null; this.src='https://placehold.co/96x96/E0E0E0/000000?text=BP';">

            <div class="d-flex align-items-center justify-content-center mb-1">
                <h1 class="profile-title mb-0">Bella Poarch</h1>
                 <i class="bi bi-patch-check-fill text-primary verification-badge"></i>
            </div>

            <h2 class="profile-description px-md-5 px-3">Pre-Save "Will You Always Love Her?" now🖤</h2>
        </div>

        <div class="social-icons text-center mb-4 pb-2">
            <a title="Instagram" target="_blank" rel="noopener noreferrer" href="https://instagram.com/bellapoarch" aria-label="Instagram">
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z"></path>
                    <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
                    <path d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z"></path>
                </svg>
                <span class="sr-only">Instagram</span>
            </a>
            <a title="TikTok" target="_blank" rel="noopener noreferrer" href="https://tiktok.com/@bellapoarch" aria-label="TikTok">
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z"></path>
                </svg>
                <span class="sr-only">TikTok</span>
            </a>
            <a title="Facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/BellaPoarch" aria-label="Facebook">
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                     <path d="M23,12A11,11,0,1,0,10.279,22.865h0a11.08,11.08,0,0,0,3.436,0h0A10.952,10.952,0,0,0,23,12ZM10.859,21.935v-6.9a.5.5,0,0,0-.5-.5H8.193V12.5h2.166a.5.5,0,0,0,.5-.5V9.686c0-2.278,1.264-3.585,3.459-3.585a15.392,15.392,0,0,1,1.858.137V7.89h-.824l-.019,0a2,2,0,0,0-2.181,1.735,1.8,1.8,0,0,0-.011.4V12a.5.5,0,0,0,.5.5H15.97l-.312,2.035H13.641a.5.5,0,0,0-.5.5v6.9A10.124,10.124,0,0,1,10.859,21.935Zm3.282-.166V15.535h1.946a.5.5,0,0,0,.5-.425l.465-3.035a.5.5,0,0,0-.494-.575H14.141V10.016a1.267,1.267,0,0,1,.308-.821,1.218,1.218,0,0,1,.9-.3h1.324a.5.5,0,0,0,.5-.5V5.806a.5.5,0,0,0-.42-.494A16.661,16.661,0,0,0,14.325,5.1c-2.754,0-4.466,1.757-4.466,4.585V11.5H7.693a.5.5,0,0,0-.5.5v3.035a.5.5,0,0,0,.5.5H9.859v6.234a10,10,0,1,1,4.282,0Z"></path>
                </svg>
                <span class="sr-only">Facebook</span>
            </a>
            <a title="YouTube" target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCCY_8y1FjtOegxKB4s2bWqw" aria-label="YouTube">
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z"></path>
                </svg>
                <span class="sr-only">YouTube</span>
            </a>
            <a title="X" target="_blank" rel="noopener noreferrer" href="https://x.com/bellapoarch" aria-label="X">
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z"></path>
                </svg>
                <span class="sr-only">X</span>
            </a>
            <a title="Spotify" target="_blank" rel="noopener noreferrer" href="https://open.spotify.com/artist/26cMerAxjx9GedFt0lMDjm?si=f9KJ8UHuTJunRRtCb29TGg" aria-label="Spotify">
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path d="M18,10.561a.494.494,0,0,1-.245-.065,15.2,15.2,0,0,0-10.95-1.55.5.5,0,0,1-.232-.973A16.2,16.2,0,0,1,18.25,9.626a.5.5,0,0,1-.247.935Z"></path>
                    <path d="M16.646,13.632a.5.5,0,0,1-.249-.066,12.459,12.459,0,0,0-9.121-1.292.5.5,0,1,1-.237-.971A13.458,13.458,0,0,1,16.9,12.7a.5.5,0,0,1-.25.933Z"></path>
                    <path d="M15.312,16.583a.5.5,0,0,1-.251-.068,9.777,9.777,0,0,0-7.295-1.033.5.5,0,0,1-.245-.97,10.768,10.768,0,0,1,8.043,1.139.5.5,0,0,1-.252.932Z"></path>
                    <path d="M12,23A11,11,0,1,1,23,12,11.013,11.013,0,0,1,12,23ZM12,2A10,10,0,1,0,22,12,10.011,10.011,0,0,0,12,2Z"></path>
                </svg>
                <span class="sr-only">Spotify</span>
            </a>
            <a title="Snapchat" target="_blank" rel="noopener noreferrer" href="https://www.snapchat.com/add/bellapoarch" aria-label="Snapchat">
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path d="M12,22.5a6.309,6.309,0,0,1-3.574-1.315,2.457,2.457,0,0,0-2.3-.53,1.679,1.679,0,0,1-1.294-.018,1.522,1.522,0,0,1-.615-1.051c-.031-.125-.059-.159-.621-.284a7.775,7.775,0,0,1-.9-.245,1.512,1.512,0,0,1-1.19-1.5.968.968,0,0,1,.729-.907A5.19,5.19,0,0,0,5.885,12.8a11.574,11.574,0,0,1-1.808-1.067A1.816,1.816,0,0,1,6.138,8.741C6.11,8.357,6.09,7.9,6.091,7.375a5.909,5.909,0,0,1,11.818,0c0,.522-.018.982-.047,1.366a1.816,1.816,0,0,1,2.062,2.987A11.542,11.542,0,0,1,18.115,12.8a5.19,5.19,0,0,0,3.652,3.856.991.991,0,0,1,.732.939,1.524,1.524,0,0,1-1.193,1.466,7.775,7.775,0,0,1-.9.245c-.562.125-.59.159-.621.285a1.522,1.522,0,0,1-.615,1.05,1.679,1.679,0,0,1-1.294.018,2.458,2.458,0,0,0-2.3.529A6.3,6.3,0,0,1,12,22.5ZM6.789,19.552a3.914,3.914,0,0,1,2.19.8A5.367,5.367,0,0,0,12,21.5a5.367,5.367,0,0,0,3.021-1.149,3.464,3.464,0,0,1,3.132-.656c.405.118.515.075.516.075a1.477,1.477,0,0,0,.141-.423c.187-.757.791-.891,1.375-1.021a7.09,7.09,0,0,0,.793-.213c.508-.177.522-.438.522-.467l0-.021a6.226,6.226,0,0,1-4.393-4.748.822.822,0,0,1,.464-.93,10.283,10.283,0,0,0,1.756-1.02.817.817,0,0,0,.319-.537.807.807,0,0,0-.155-.6.817.817,0,0,0-1.141-.166,8.194,8.194,0,0,1-.852.536.5.5,0,0,1-.737-.512,15.116,15.116,0,0,0,.15-2.267,4.909,4.909,0,0,0-9.818,0,15.246,15.246,0,0,0,.15,2.267.5.5,0,0,1-.737.512,8.247,8.247,0,0,1-.851-.535.816.816,0,0,0-1.142.165.813.813,0,0,0,.165,1.141,10.206,10.206,0,0,0,1.755,1.02.823.823,0,0,1,.464.931,6.208,6.208,0,0,1-4.4,4.74c.008.057.022.318.53.5a7.09,7.09,0,0,0,.793.213c.584.13,1.188.264,1.375,1.021a1.329,1.329,0,0,0,.147.427h0a1.12,1.12,0,0,0,.51-.079A3.335,3.335,0,0,1,6.789,19.552Z"></path>
                </svg>
                <span class="sr-only">Snapchat</span>
            </a>
        </div>

        <div class="links-container">

            <h3 class="link-header text-center">RESOURCES</h3>
            <div class="d-grid gap-3 mb-4">
                <a href="https://wck.org/story" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                    <img src="https://ugc.production.linktr.ee/098877a8-ebe1-4127-a5c1-e3c207fb02c9_5e5d671d-c68c-452e-aa89-ddf94dcf98e4-Helicopter-Bahamas-Relief.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="World Central Kitchen Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=WCK';">
                    <span class="link-text">Learn more about World Central Kitchen</span>
                </a>
                <a href="https://supportlafd.kindful.com/?campaign=1040812&fbclid=PAZXh0bgNhZW0CMTEAAaZ6dycgQrXBPQvyvbehHP6nUWby22sqRsqgBK4NmnSaPtPqCubBXbhitbk_aem_BtPHcZR3-m3qdrAWb-qVwg" target="_blank" rel="noopener" class="link-button link-classic no-thumbnail">
                    <span class="link-text">Learn more about the Los Angeles Fire Department Foundation</span>
                </a>
                 <a href="https://www.pcrf.net" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                    <img src="https://ugc.production.linktr.ee/8611db7c-e496-441d-a015-7d0ce570bd14_og-default.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="PCRF Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=PCRF';">
                    <span class="link-text">Learn more about the PCRF</span>
                </a>
            </div>

            <h3 class="link-header text-center">BP1</h3>
            <div class="row g-2 mb-4"> <div class="col-6 link-grid-item">
                    <a href="https://youtu.be/F93BD5wtkdo?si=-7pcNUlj40r8sMvz" target="_blank" rel="noopener" class="link-button link-grid"> <img src="https://ugc.production.linktr.ee/1752a980-379b-4cc4-b742-11d6d78cdbb1_SWEETDELUSION-THUMBNAIL-.jpeg?io=true&size=thumbnail-stack-v1_0"
                             class="link-thumbnail-grid" alt="SWEET DELUSION MV Thumbnail"
                             onerror="this.onerror=null; this.src='https://placehold.co/150x150/CCCCCC/444444?text=SD+MV';">
                        <span class="link-text">SWEET DELUSION MV🤍</span>
                    </a>
                </div>
                 <div class="col-6 link-grid-item">
                    <a href="https://youtu.be/p2xV3oRcAao" target="_blank" rel="noopener" class="link-button link-grid"> <img src="https://ugc.production.linktr.ee/4e3d8d09-0d3f-4e0b-9b14-7549f05fdd76_maxresdefault.jpeg?io=true&size=thumbnail-stack-v1_0"
                             class="link-thumbnail-grid" alt="Streamer Awards Thumbnail"
                             onerror="this.onerror=null; this.src='https://placehold.co/150x150/CCCCCC/444444?text=Live';">
                        <span class="link-text">Bella Poarch - Sweet Delusion / Will You Always Love Her? (Live at the Streamer Awards)</span>
                    </a>
                </div>
                 <div class="col-6 link-grid-item">
                    <a href="https://youtu.be/J1u6JiUMxcA?feature=shared" target="_blank" rel="noopener" class="link-button link-grid"> <img src="https://ugc.production.linktr.ee/f36465df-781f-4b05-9f1e-4b30a3563c96_maxresdefault.jpeg?io=true&size=thumbnail-stack-v1_0"
                             class="link-thumbnail-grid" alt="SWEET DELUSION ACOUSTIC Thumbnail"
                             onerror="this.onerror=null; this.src='https://placehold.co/150x150/CCCCCC/444444?text=Acoustic';">
                        <span class="link-text">SWEET DELUSION (ACOUSTIC)🎤</span>
                    </a>
                </div>
                 <div class="col-6 link-grid-item">
                    <a href="https://youtu.be/rgCA97edZTw" target="_blank" rel="noopener" class="link-button link-grid"> <img src="https://ugc.production.linktr.ee/37394a22-b45b-494a-87bc-8de60a189d9a_maxresdefault.jpeg?io=true&size=thumbnail-stack-v1_0"
                             class="link-thumbnail-grid" alt="SWEET DELUSION BTS Thumbnail"
                             onerror="this.onerror=null; this.src='https://placehold.co/150x150/CCCCCC/444444?text=BTS';">
                        <span class="link-text">SWEET DELUSION BTS VIDEO🎥</span>
                    </a>
                </div>
            </div>
            <div class="d-grid gap-3 mb-4">
                 <a href="https://bellapoarch.lnk.to/WYALH" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                    <img src="https://ugc.production.linktr.ee/7b11380b-07c3-4b46-8380-3a257e639ee3_artwork-600x315.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="WYALH Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=WYALH';">
                    <span class="link-text">PRE-SAVE WILL YOU ALWAYS LOVE HER?🖤</span>
                </a>
            </div>

            <h3 class="link-header text-center">MUSIC</h3>
            <div class="d-grid gap-3 mb-4">
                 <a href="https://bellapoarch.lnk.to/sweetdelusionacoustic" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                    <img src="https://ugc.production.linktr.ee/ea1e352f-b1a5-4660-8a66-2995cecb608a_SD-Acoustic-Cover.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="SD Acoustic Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=SD';">
                    <span class="link-text">STREAM SWEET DELUSION (ACOUSTIC)💚</span>
                </a>
                 <a href="https://bellapoarch.lnk.to/sweetdelusion" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                    <img src="https://ugc.production.linktr.ee/99b94967-66eb-44bf-92d3-be9d9714e647_SINGLE-ART--FINAL.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="Sweet Delusion Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=SD';">
                    <span class="link-text">STREAM SWEET DELUSION🤍</span>
                </a>
                 <a href="https://www.youtube.com/playlist?list=PLMlfMMNtfEW9d9Y8quiSULqeWchFqNwGU" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail"> <img src="https://ugc.production.linktr.ee/3e11dfb2-ef0f-4549-96ea-5995e1911faf_hqdefault.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="Dolls EP MV Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=MV';">
                    <span class="link-text">DOLLS EP MUSIC VIDEOS🦾</span>
                </a>
                 <a href="https://bellapoarch.lnk.to/Dolls-EP" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                    <img src="https://ugc.production.linktr.ee/4bd03dc7-1332-4a68-ac86-fe6c92197545_IMG-7569.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="Dolls EP Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=EP';">
                    <span class="link-text">STREAM THE DOLLS EP💛</span>
                </a>
            </div>

             <h3 class="link-header text-center">Vlogs</h3>
            <div class="row g-2 mb-4"> <div class="col-12 link-featured-item">
                    <a href="https://youtu.be/G4Dc0cEF7Xc?feature=shared" target="_blank" rel="noopener" class="link-button link-featured" style="background-image: url('https://ugc.production.linktr.ee/151b800a-6d2b-40c7-a01d-c741922398dd_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0');"
                       onerror="this.style.backgroundImage='url(https://placehold.co/600x338/CCCCCC/444444?text=Vlog)'; this.style.backgroundColor='#CCCCCC';"> <span class="link-text">My delusional week ft. valkyrae, pretty basic, &more!</span>
                    </a>
                </div>
                 <div class="col-12 link-featured-item">
                    <a href="https://youtu.be/7HbuOYzQKG0?feature=shared" target="_blank" rel="noopener" class="link-button link-featured" style="background-image: url('https://ugc.production.linktr.ee/c6bea390-7c8e-4b8c-b680-4ac65fe8512c_maxresdefault.jpeg?io=true&size=thumbnail-feature-v1_0');"
                       onerror="this.style.backgroundImage='url(https://placehold.co/600x338/CCCCCC/444444?text=Vlog)'; this.style.backgroundColor='#CCCCCC';"> <span class="link-text">My first YouTube vlog!📹</span>
                    </a>
                 </div>
            </div>

             <h3 class="link-header text-center">MERCH</h3>
            <div class="d-grid gap-3 mb-4">
                 <a href="https://funko.com/pop-bella-poarch/66454.html" target="_blank" rel="noopener" class="link-button link-classic no-thumbnail">
                    <span class="link-text">BAB FUNKO POP🖤</span>
                </a>
                 <a href="https://funko.com/pop-bella-poarch-inferno/75385.html" target="_blank" rel="noopener" class="link-button link-classic no-thumbnail">
                    <span class="link-text">INFERNO FUNKO POP😈</span>
                </a>
            </div>

             <h3 class="link-header text-center">STAY UPDATED</h3>
            <div class="d-grid gap-3 mb-4">
                 <a href="https://my.community.com/bellapoarch" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                     <img src="https://ugc.production.linktr.ee/6ab6b697-8fae-494e-b3e6-254f733a165d_bellapoarch-og.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="Community Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=Chat';">
                    <span class="link-text">TEXT ME✨</span>
                </a>
                 <a href="https://discord.gg/bellapoarch" target="_blank" rel="noopener" class="link-button link-classic has-thumbnail">
                     <img src="https://ugc.production.linktr.ee/1053543f-418c-4435-899c-93ea579ebc50_1a1a342743aa0f1fcd9eb983d1dd289d.jpeg?io=true&size=thumbnail-stack-v1_0"
                         class="link-thumbnail" alt="Discord Thumbnail"
                         onerror="this.onerror=null; this.src='https://placehold.co/46x46/CCCCCC/444444?text=Discord';">
                    <span class="link-text">JOIN MY DISCORD💕</span>
                </a>
                 <a href="https://whatsapp.com/channel/0029Vah7vyn77qVLjfd4jO1P" target="_blank" rel="noopener" class="link-button link-classic no-thumbnail">
                    <span class="link-text">JOIN MY WHATSAPP GROUP💬</span>
                </a>
            </div>

        </div> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</ht