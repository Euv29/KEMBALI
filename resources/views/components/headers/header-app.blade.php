<header class="header-container flex space-between align-center">

    <nav class="mobile-nav">
        @auth
            <section class="flex align-center">
                <section class="notification-left notification" onclick="showNotification()">
                    @if (count(auth()->user()->unreadNotifications) >= 1)
                        <section class="notification-signal-area flex">
                            <ion-icon name="radio-button-on-outline" class="notification-signal"></ion-icon>
                        </section>
                    @endif

                    <ion-icon name="notifications" class="header-icon"></ion-icon>
                </section>
            </section>
        @endauth
    </nav>

    <section class="logo">
        <a href="{{ route('post.index') }}" id="logo" class="flex align-center">
            <svg width="232" height="50" viewBox="0 0 232 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="path-1-outside-1_309_40" maskUnits="userSpaceOnUse" x="0.783203" y="0.600006"
                    width="231" height="49" fill="black">
                    <rect fill="white" x="0.783203" y="0.600006" width="231" height="49" />
                    <path
                        d="M31.7032 47C30.5832 47 29.6832 46.54 29.0032 45.62L15.1432 27.38L20.6032 21.8L34.9432 40.76C35.5032 41.52 35.7832 42.34 35.7832 43.22C35.7832 44.34 35.3632 45.26 34.5232 45.98C33.6832 46.66 32.7432 47 31.7032 47ZM32.4232 4.7C33.3832 4.7 34.1632 5.1 34.7632 5.9C35.4032 6.66 35.7232 7.44001 35.7232 8.24C35.7232 9.08001 35.3632 9.86 34.6432 10.58L9.5032 34.64L9.2032 26.06L29.4832 6.08C30.4032 5.16 31.3832 4.7 32.4232 4.7ZM6.5032 47C5.3832 47 4.4832 46.66 3.8032 45.98C3.1232 45.26 2.7832 44.38 2.7832 43.34V8.66C2.7832 7.62 3.1432 6.76001 3.8632 6.08C4.5832 5.36 5.5032 5 6.6232 5C7.7432 5 8.6232 5.36 9.2632 6.08C9.9432 6.76001 10.2832 7.62 10.2832 8.66V43.34C10.2832 44.38 9.9432 45.26 9.2632 45.98C8.5832 46.66 7.6632 47 6.5032 47Z" />
                    <path
                        d="M55.3305 47.6C51.9305 47.6 48.9705 46.9 46.4505 45.5C43.9705 44.06 42.0505 42.12 40.6905 39.68C39.3705 37.24 38.7105 34.48 38.7105 31.4C38.7105 27.8 39.4305 24.74 40.8705 22.22C42.3505 19.66 44.2705 17.7 46.6305 16.34C48.9905 14.98 51.4905 14.3 54.1305 14.3C56.1705 14.3 58.0905 14.72 59.8905 15.56C61.7305 16.4 63.3505 17.56 64.7505 19.04C66.1505 20.48 67.2506 22.16 68.0506 24.08C68.8906 26 69.3105 28.04 69.3105 30.2C69.2705 31.16 68.8905 31.94 68.1705 32.54C67.4505 33.14 66.6106 33.44 65.6506 33.44H42.7305L40.9305 27.44H62.9505L61.6305 28.64V27.02C61.5505 25.86 61.1305 24.82 60.3705 23.9C59.6505 22.98 58.7305 22.26 57.6105 21.74C56.5305 21.18 55.3705 20.9 54.1305 20.9C52.9305 20.9 51.8105 21.06 50.7705 21.38C49.7305 21.7 48.8305 22.24 48.0705 23C47.3105 23.76 46.7105 24.78 46.2705 26.06C45.8305 27.34 45.6105 28.96 45.6105 30.92C45.6105 33.08 46.0505 34.92 46.9305 36.44C47.8505 37.92 49.0105 39.06 50.4105 39.86C51.8505 40.62 53.3705 41 54.9705 41C56.4505 41 57.6305 40.88 58.5105 40.64C59.3905 40.4 60.0905 40.12 60.6105 39.8C61.1705 39.44 61.6706 39.14 62.1105 38.9C62.8306 38.54 63.5106 38.36 64.1506 38.36C65.0306 38.36 65.7505 38.66 66.3105 39.26C66.9105 39.86 67.2105 40.56 67.2105 41.36C67.2105 42.44 66.6505 43.42 65.5305 44.3C64.4905 45.18 63.0306 45.96 61.1506 46.64C59.2706 47.28 57.3305 47.6 55.3305 47.6Z" />
                    <path
                        d="M92.4612 14.3C95.6612 14.3 98.0212 15.08 99.5412 16.64C101.061 18.16 102.061 20.14 102.541 22.58L101.521 22.04L102.001 21.08C102.481 20.16 103.221 19.18 104.221 18.14C105.221 17.06 106.421 16.16 107.821 15.44C109.261 14.68 110.861 14.3 112.621 14.3C115.501 14.3 117.681 14.92 119.161 16.16C120.681 17.4 121.721 19.06 122.281 21.14C122.841 23.18 123.121 25.46 123.121 27.98V43.34C123.121 44.38 122.781 45.26 122.101 45.98C121.421 46.66 120.561 47 119.521 47C118.481 47 117.621 46.66 116.941 45.98C116.261 45.26 115.921 44.38 115.921 43.34V27.98C115.921 26.66 115.761 25.48 115.441 24.44C115.121 23.36 114.541 22.5 113.701 21.86C112.861 21.22 111.661 20.9 110.101 20.9C108.581 20.9 107.281 21.22 106.201 21.86C105.121 22.5 104.301 23.36 103.741 24.44C103.221 25.48 102.961 26.66 102.961 27.98V43.34C102.961 44.38 102.621 45.26 101.941 45.98C101.261 46.66 100.401 47 99.3612 47C98.3212 47 97.4612 46.66 96.7812 45.98C96.1012 45.26 95.7612 44.38 95.7612 43.34V27.98C95.7612 26.66 95.6012 25.48 95.2812 24.44C94.9612 23.36 94.3812 22.5 93.5412 21.86C92.7012 21.22 91.5012 20.9 89.9412 20.9C88.4212 20.9 87.1212 21.22 86.0412 21.86C84.9612 22.5 84.1412 23.36 83.5812 24.44C83.0612 25.48 82.8012 26.66 82.8012 27.98V43.34C82.8012 44.38 82.4612 45.26 81.7812 45.98C81.1012 46.66 80.2412 47 79.2012 47C78.1612 47 77.3012 46.66 76.6212 45.98C75.9412 45.26 75.6012 44.38 75.6012 43.34V18.56C75.6012 17.52 75.9412 16.66 76.6212 15.98C77.3012 15.26 78.1612 14.9 79.2012 14.9C80.2412 14.9 81.1012 15.26 81.7812 15.98C82.4612 16.66 82.8012 17.52 82.8012 18.56V21.14L81.9012 20.96C82.2612 20.28 82.7612 19.56 83.4012 18.8C84.0412 18 84.8212 17.26 85.7412 16.58C86.6612 15.9 87.6812 15.36 88.8012 14.96C89.9212 14.52 91.1412 14.3 92.4612 14.3Z" />
                    <path
                        d="M147.534 14.3C150.334 14.3 152.834 15.02 155.034 16.46C157.274 17.86 159.034 19.8 160.314 22.28C161.634 24.76 162.294 27.64 162.294 30.92C162.294 34.2 161.634 37.1 160.314 39.62C159.034 42.1 157.294 44.06 155.094 45.5C152.934 46.9 150.494 47.6 147.774 47.6C146.174 47.6 144.674 47.34 143.274 46.82C141.874 46.3 140.634 45.64 139.554 44.84C138.514 44.04 137.694 43.24 137.094 42.44C136.534 41.6 136.254 40.9 136.254 40.34L138.114 39.56V43.94C138.114 44.98 137.774 45.86 137.094 46.58C136.414 47.26 135.554 47.6 134.514 47.6C133.474 47.6 132.614 47.26 131.934 46.58C131.254 45.9 130.914 45.02 130.914 43.94V6.26C130.914 5.22 131.254 4.36 131.934 3.68C132.614 2.96001 133.474 2.60001 134.514 2.60001C135.554 2.60001 136.414 2.96001 137.094 3.68C137.774 4.36 138.114 5.22 138.114 6.26V21.5L137.094 20.96C137.094 20.44 137.374 19.82 137.934 19.1C138.494 18.34 139.254 17.6 140.214 16.88C141.174 16.12 142.274 15.5 143.514 15.02C144.794 14.54 146.134 14.3 147.534 14.3ZM146.634 20.9C144.874 20.9 143.334 21.34 142.014 22.22C140.694 23.1 139.654 24.3 138.894 25.82C138.174 27.3 137.814 29 137.814 30.92C137.814 32.8 138.174 34.52 138.894 36.08C139.654 37.6 140.694 38.8 142.014 39.68C143.334 40.56 144.874 41 146.634 41C148.394 41 149.914 40.56 151.194 39.68C152.514 38.8 153.534 37.6 154.254 36.08C155.014 34.52 155.394 32.8 155.394 30.92C155.394 29 155.014 27.3 154.254 25.82C153.534 24.3 152.514 23.1 151.194 22.22C149.914 21.34 148.394 20.9 146.634 20.9Z" />
                    <path
                        d="M194.869 14.3C195.909 14.3 196.769 14.64 197.449 15.32C198.129 16 198.469 16.88 198.469 17.96V43.34C198.469 44.38 198.129 45.26 197.449 45.98C196.769 46.66 195.909 47 194.869 47C193.829 47 192.969 46.66 192.289 45.98C191.609 45.26 191.269 44.38 191.269 43.34V40.4L192.589 40.94C192.589 41.46 192.309 42.1 191.749 42.86C191.189 43.58 190.429 44.3 189.469 45.02C188.509 45.74 187.369 46.36 186.049 46.88C184.769 47.36 183.369 47.6 181.849 47.6C179.089 47.6 176.589 46.9 174.349 45.5C172.109 44.06 170.329 42.1 169.009 39.62C167.729 37.1 167.089 34.22 167.089 30.98C167.089 27.7 167.729 24.82 169.009 22.34C170.329 19.82 172.089 17.86 174.289 16.46C176.489 15.02 178.929 14.3 181.609 14.3C183.329 14.3 184.909 14.56 186.349 15.08C187.789 15.6 189.029 16.26 190.069 17.06C191.149 17.86 191.969 18.68 192.529 19.52C193.129 20.32 193.429 21 193.429 21.56L191.269 22.34V17.96C191.269 16.92 191.609 16.06 192.289 15.38C192.969 14.66 193.829 14.3 194.869 14.3ZM182.749 41C184.509 41 186.049 40.56 187.369 39.68C188.689 38.8 189.709 37.6 190.429 36.08C191.189 34.56 191.569 32.86 191.569 30.98C191.569 29.06 191.189 27.34 190.429 25.82C189.709 24.3 188.689 23.1 187.369 22.22C186.049 21.34 184.509 20.9 182.749 20.9C181.029 20.9 179.509 21.34 178.189 22.22C176.869 23.1 175.829 24.3 175.069 25.82C174.349 27.34 173.989 29.06 173.989 30.98C173.989 32.86 174.349 34.56 175.069 36.08C175.829 37.6 176.869 38.8 178.189 39.68C179.509 40.56 181.029 41 182.749 41Z" />
                    <path
                        d="M214.065 43.34C214.065 44.38 213.705 45.26 212.985 45.98C212.305 46.66 211.445 47 210.405 47C209.405 47 208.565 46.66 207.885 45.98C207.205 45.26 206.865 44.38 206.865 43.34V6.26C206.865 5.22 207.205 4.36 207.885 3.68C208.605 2.96001 209.485 2.60001 210.525 2.60001C211.565 2.60001 212.405 2.96001 213.045 3.68C213.725 4.36 214.065 5.22 214.065 6.26V43.34Z" />
                    <path
                        d="M229.217 43.34C229.217 44.38 228.877 45.26 228.197 45.98C227.517 46.66 226.657 47 225.617 47C224.577 47 223.717 46.66 223.037 45.98C222.357 45.26 222.017 44.38 222.017 43.34V18.56C222.017 17.52 222.357 16.66 223.037 15.98C223.717 15.26 224.577 14.9 225.617 14.9C226.657 14.9 227.517 15.26 228.197 15.98C228.877 16.66 229.217 17.52 229.217 18.56V43.34ZM225.557 11C224.197 11 223.237 10.78 222.677 10.34C222.117 9.90001 221.837 9.12 221.837 8V6.86001C221.837 5.70001 222.137 4.92001 222.737 4.52001C223.377 4.08001 224.337 3.86 225.617 3.86C227.017 3.86 227.997 4.08001 228.557 4.52001C229.117 4.96001 229.397 5.74001 229.397 6.86001V8C229.397 9.16 229.097 9.96 228.497 10.4C227.897 10.8 226.917 11 225.557 11Z" />
                </mask>
                <path
                    d="M31.7032 47C30.5832 47 29.6832 46.54 29.0032 45.62L15.1432 27.38L20.6032 21.8L34.9432 40.76C35.5032 41.52 35.7832 42.34 35.7832 43.22C35.7832 44.34 35.3632 45.26 34.5232 45.98C33.6832 46.66 32.7432 47 31.7032 47ZM32.4232 4.7C33.3832 4.7 34.1632 5.1 34.7632 5.9C35.4032 6.66 35.7232 7.44001 35.7232 8.24C35.7232 9.08001 35.3632 9.86 34.6432 10.58L9.5032 34.64L9.2032 26.06L29.4832 6.08C30.4032 5.16 31.3832 4.7 32.4232 4.7ZM6.5032 47C5.3832 47 4.4832 46.66 3.8032 45.98C3.1232 45.26 2.7832 44.38 2.7832 43.34V8.66C2.7832 7.62 3.1432 6.76001 3.8632 6.08C4.5832 5.36 5.5032 5 6.6232 5C7.7432 5 8.6232 5.36 9.2632 6.08C9.9432 6.76001 10.2832 7.62 10.2832 8.66V43.34C10.2832 44.38 9.9432 45.26 9.2632 45.98C8.5832 46.66 7.6632 47 6.5032 47Z"
                    stroke="white" stroke-width="4" mask="url(#path-1-outside-1_309_40)" />
                <path
                    d="M55.3305 47.6C51.9305 47.6 48.9705 46.9 46.4505 45.5C43.9705 44.06 42.0505 42.12 40.6905 39.68C39.3705 37.24 38.7105 34.48 38.7105 31.4C38.7105 27.8 39.4305 24.74 40.8705 22.22C42.3505 19.66 44.2705 17.7 46.6305 16.34C48.9905 14.98 51.4905 14.3 54.1305 14.3C56.1705 14.3 58.0905 14.72 59.8905 15.56C61.7305 16.4 63.3505 17.56 64.7505 19.04C66.1505 20.48 67.2506 22.16 68.0506 24.08C68.8906 26 69.3105 28.04 69.3105 30.2C69.2705 31.16 68.8905 31.94 68.1705 32.54C67.4505 33.14 66.6106 33.44 65.6506 33.44H42.7305L40.9305 27.44H62.9505L61.6305 28.64V27.02C61.5505 25.86 61.1305 24.82 60.3705 23.9C59.6505 22.98 58.7305 22.26 57.6105 21.74C56.5305 21.18 55.3705 20.9 54.1305 20.9C52.9305 20.9 51.8105 21.06 50.7705 21.38C49.7305 21.7 48.8305 22.24 48.0705 23C47.3105 23.76 46.7105 24.78 46.2705 26.06C45.8305 27.34 45.6105 28.96 45.6105 30.92C45.6105 33.08 46.0505 34.92 46.9305 36.44C47.8505 37.92 49.0105 39.06 50.4105 39.86C51.8505 40.62 53.3705 41 54.9705 41C56.4505 41 57.6305 40.88 58.5105 40.64C59.3905 40.4 60.0905 40.12 60.6105 39.8C61.1705 39.44 61.6706 39.14 62.1105 38.9C62.8306 38.54 63.5106 38.36 64.1506 38.36C65.0306 38.36 65.7505 38.66 66.3105 39.26C66.9105 39.86 67.2105 40.56 67.2105 41.36C67.2105 42.44 66.6505 43.42 65.5305 44.3C64.4905 45.18 63.0306 45.96 61.1506 46.64C59.2706 47.28 57.3305 47.6 55.3305 47.6Z"
                    stroke="white" stroke-width="4" mask="url(#path-1-outside-1_309_40)" />
                <path
                    d="M92.4612 14.3C95.6612 14.3 98.0212 15.08 99.5412 16.64C101.061 18.16 102.061 20.14 102.541 22.58L101.521 22.04L102.001 21.08C102.481 20.16 103.221 19.18 104.221 18.14C105.221 17.06 106.421 16.16 107.821 15.44C109.261 14.68 110.861 14.3 112.621 14.3C115.501 14.3 117.681 14.92 119.161 16.16C120.681 17.4 121.721 19.06 122.281 21.14C122.841 23.18 123.121 25.46 123.121 27.98V43.34C123.121 44.38 122.781 45.26 122.101 45.98C121.421 46.66 120.561 47 119.521 47C118.481 47 117.621 46.66 116.941 45.98C116.261 45.26 115.921 44.38 115.921 43.34V27.98C115.921 26.66 115.761 25.48 115.441 24.44C115.121 23.36 114.541 22.5 113.701 21.86C112.861 21.22 111.661 20.9 110.101 20.9C108.581 20.9 107.281 21.22 106.201 21.86C105.121 22.5 104.301 23.36 103.741 24.44C103.221 25.48 102.961 26.66 102.961 27.98V43.34C102.961 44.38 102.621 45.26 101.941 45.98C101.261 46.66 100.401 47 99.3612 47C98.3212 47 97.4612 46.66 96.7812 45.98C96.1012 45.26 95.7612 44.38 95.7612 43.34V27.98C95.7612 26.66 95.6012 25.48 95.2812 24.44C94.9612 23.36 94.3812 22.5 93.5412 21.86C92.7012 21.22 91.5012 20.9 89.9412 20.9C88.4212 20.9 87.1212 21.22 86.0412 21.86C84.9612 22.5 84.1412 23.36 83.5812 24.44C83.0612 25.48 82.8012 26.66 82.8012 27.98V43.34C82.8012 44.38 82.4612 45.26 81.7812 45.98C81.1012 46.66 80.2412 47 79.2012 47C78.1612 47 77.3012 46.66 76.6212 45.98C75.9412 45.26 75.6012 44.38 75.6012 43.34V18.56C75.6012 17.52 75.9412 16.66 76.6212 15.98C77.3012 15.26 78.1612 14.9 79.2012 14.9C80.2412 14.9 81.1012 15.26 81.7812 15.98C82.4612 16.66 82.8012 17.52 82.8012 18.56V21.14L81.9012 20.96C82.2612 20.28 82.7612 19.56 83.4012 18.8C84.0412 18 84.8212 17.26 85.7412 16.58C86.6612 15.9 87.6812 15.36 88.8012 14.96C89.9212 14.52 91.1412 14.3 92.4612 14.3Z"
                    stroke="white" stroke-width="4" mask="url(#path-1-outside-1_309_40)" />
                <path
                    d="M147.534 14.3C150.334 14.3 152.834 15.02 155.034 16.46C157.274 17.86 159.034 19.8 160.314 22.28C161.634 24.76 162.294 27.64 162.294 30.92C162.294 34.2 161.634 37.1 160.314 39.62C159.034 42.1 157.294 44.06 155.094 45.5C152.934 46.9 150.494 47.6 147.774 47.6C146.174 47.6 144.674 47.34 143.274 46.82C141.874 46.3 140.634 45.64 139.554 44.84C138.514 44.04 137.694 43.24 137.094 42.44C136.534 41.6 136.254 40.9 136.254 40.34L138.114 39.56V43.94C138.114 44.98 137.774 45.86 137.094 46.58C136.414 47.26 135.554 47.6 134.514 47.6C133.474 47.6 132.614 47.26 131.934 46.58C131.254 45.9 130.914 45.02 130.914 43.94V6.26C130.914 5.22 131.254 4.36 131.934 3.68C132.614 2.96001 133.474 2.60001 134.514 2.60001C135.554 2.60001 136.414 2.96001 137.094 3.68C137.774 4.36 138.114 5.22 138.114 6.26V21.5L137.094 20.96C137.094 20.44 137.374 19.82 137.934 19.1C138.494 18.34 139.254 17.6 140.214 16.88C141.174 16.12 142.274 15.5 143.514 15.02C144.794 14.54 146.134 14.3 147.534 14.3ZM146.634 20.9C144.874 20.9 143.334 21.34 142.014 22.22C140.694 23.1 139.654 24.3 138.894 25.82C138.174 27.3 137.814 29 137.814 30.92C137.814 32.8 138.174 34.52 138.894 36.08C139.654 37.6 140.694 38.8 142.014 39.68C143.334 40.56 144.874 41 146.634 41C148.394 41 149.914 40.56 151.194 39.68C152.514 38.8 153.534 37.6 154.254 36.08C155.014 34.52 155.394 32.8 155.394 30.92C155.394 29 155.014 27.3 154.254 25.82C153.534 24.3 152.514 23.1 151.194 22.22C149.914 21.34 148.394 20.9 146.634 20.9Z"
                    stroke="white" stroke-width="4" mask="url(#path-1-outside-1_309_40)" />
                <path
                    d="M194.869 14.3C195.909 14.3 196.769 14.64 197.449 15.32C198.129 16 198.469 16.88 198.469 17.96V43.34C198.469 44.38 198.129 45.26 197.449 45.98C196.769 46.66 195.909 47 194.869 47C193.829 47 192.969 46.66 192.289 45.98C191.609 45.26 191.269 44.38 191.269 43.34V40.4L192.589 40.94C192.589 41.46 192.309 42.1 191.749 42.86C191.189 43.58 190.429 44.3 189.469 45.02C188.509 45.74 187.369 46.36 186.049 46.88C184.769 47.36 183.369 47.6 181.849 47.6C179.089 47.6 176.589 46.9 174.349 45.5C172.109 44.06 170.329 42.1 169.009 39.62C167.729 37.1 167.089 34.22 167.089 30.98C167.089 27.7 167.729 24.82 169.009 22.34C170.329 19.82 172.089 17.86 174.289 16.46C176.489 15.02 178.929 14.3 181.609 14.3C183.329 14.3 184.909 14.56 186.349 15.08C187.789 15.6 189.029 16.26 190.069 17.06C191.149 17.86 191.969 18.68 192.529 19.52C193.129 20.32 193.429 21 193.429 21.56L191.269 22.34V17.96C191.269 16.92 191.609 16.06 192.289 15.38C192.969 14.66 193.829 14.3 194.869 14.3ZM182.749 41C184.509 41 186.049 40.56 187.369 39.68C188.689 38.8 189.709 37.6 190.429 36.08C191.189 34.56 191.569 32.86 191.569 30.98C191.569 29.06 191.189 27.34 190.429 25.82C189.709 24.3 188.689 23.1 187.369 22.22C186.049 21.34 184.509 20.9 182.749 20.9C181.029 20.9 179.509 21.34 178.189 22.22C176.869 23.1 175.829 24.3 175.069 25.82C174.349 27.34 173.989 29.06 173.989 30.98C173.989 32.86 174.349 34.56 175.069 36.08C175.829 37.6 176.869 38.8 178.189 39.68C179.509 40.56 181.029 41 182.749 41Z"
                    stroke="white" stroke-width="4" mask="url(#path-1-outside-1_309_40)" />
                <path
                    d="M214.065 43.34C214.065 44.38 213.705 45.26 212.985 45.98C212.305 46.66 211.445 47 210.405 47C209.405 47 208.565 46.66 207.885 45.98C207.205 45.26 206.865 44.38 206.865 43.34V6.26C206.865 5.22 207.205 4.36 207.885 3.68C208.605 2.96001 209.485 2.60001 210.525 2.60001C211.565 2.60001 212.405 2.96001 213.045 3.68C213.725 4.36 214.065 5.22 214.065 6.26V43.34Z"
                    stroke="white" stroke-width="4" mask="url(#path-1-outside-1_309_40)" />
                <path
                    d="M229.217 43.34C229.217 44.38 228.877 45.26 228.197 45.98C227.517 46.66 226.657 47 225.617 47C224.577 47 223.717 46.66 223.037 45.98C222.357 45.26 222.017 44.38 222.017 43.34V18.56C222.017 17.52 222.357 16.66 223.037 15.98C223.717 15.26 224.577 14.9 225.617 14.9C226.657 14.9 227.517 15.26 228.197 15.98C228.877 16.66 229.217 17.52 229.217 18.56V43.34ZM225.557 11C224.197 11 223.237 10.78 222.677 10.34C222.117 9.90001 221.837 9.12 221.837 8V6.86001C221.837 5.70001 222.137 4.92001 222.737 4.52001C223.377 4.08001 224.337 3.86 225.617 3.86C227.017 3.86 227.997 4.08001 228.557 4.52001C229.117 4.96001 229.397 5.74001 229.397 6.86001V8C229.397 9.16 229.097 9.96 228.497 10.4C227.897 10.8 226.917 11 225.557 11Z"
                    stroke="white" stroke-width="4" mask="url(#path-1-outside-1_309_40)" />
            </svg>

        </a>
    </section>

    <nav class="navbar flex align-center justify-end">
        @guest
            <ul class="nav-list-guest normal-text">
                <li>
                    <a href="{{ route('login') }}">Entrar</a>
                </li>
            </ul>
        @endguest

        @auth
            <ul class="nav-list flex space-evenly align-center normal-text">
                <li><a href="{{ route('post.index') }}" class="list-link" id="home">Home</a></li>
                <li>
                    <a href="{{ route('search') }}" class="list-link flex align-center">
                        <ion-icon name="search-outline" class="search-header-icon"></ion-icon>
                        Procurar
                    </a>
                </li>
                <li><a href="{{ route('reportar.create') }}" class="list-link">Reportar</a></li>
            </ul>

            <section onclick="showNotification()" class="notification-right notification">
                @if (count(auth()->user()->unreadNotifications) >= 1)
                    <section class="notification-signal-area flex">
                        <ion-icon name="radio-button-on-outline" class="notification-signal"></ion-icon>
                    </section>
                @endif
                <ion-icon name="notifications" class="header-icon"></ion-icon>
            </section>

            <p class="profile-pic-area flex align-center" onclick="showMenu()">
                <img src="/img/perfil/{{ auth()->user()->imagem }}" alt="Foto perfil" class="profile-pic"
                    id="header-profile-pic">
            </p>
        @endauth
    </nav>

</header>

@auth
    <section class="pops">
        <section class="user-menu">
            <h1 class="menu-username">{{ auth()->user()->name }}</h1>
            <ul>
                <li class="menu-list"><a class="menu-list-link" href="{{ route('dashboard') }}">Meu Perfil</a></li>
                <li class="menu-list"><a class="menu-list-link" href="{{ route('profile.edit') }}">Editar Perfil</a></li>
                <li class="menu-list"><a class="menu-list-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            </ul>
        </section>

        <section class="notification-popup">
            @if (count(auth()->user()->unreadNotifications) >= 1)
                <section id="mark">
                    <a href="{{ route('markAsRead') }}" class="markAllAsRead">Marcar todas como lidas</a>
                </section>

                @foreach (auth()->user()->unreadNotifications as $notificacao)
                    <section class="notification-card flex align-center">
                        <ion-icon name="chatbubble-outline" class="post-icon"></ion-icon>

                        <section class="text">
                            <a href="/perguntas/{{ $notificacao->data['post'] }}/#comentario{{ $notificacao->data['comentario'] }}"
                                class="notification-text flex align-center">
                                Novo Comentário de <strong
                                    class="user-notification">{{ $notificacao->data['user'] }}</strong>
                            </a>

                            <section class="notification-comand flex">
                                <p class="notification-data">{{ $notificacao->created_at->diffForHumans() }}</p>
                            </section>
                        </section>
                    </section>
                @endforeach
            @else
                <section class="notification-card-empty flex align-center justify-center">
                    <p class="empty flex align-center">
                        <ion-icon name="chatbubble-outline" class="post-icon"></ion-icon> Sem notificações
                    </p>
                </section>
            @endif
        </section>
    </section>
@endauth
