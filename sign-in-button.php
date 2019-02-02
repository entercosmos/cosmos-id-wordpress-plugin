<style>
    .cosmos-id-sign-in-button {
        background-color: #000;
        border: none;
        padding: 4px 16px 4px 4px;
        color: #fff;
        font-size: 14px;
        font-weight: 700;
        display: flex;
        align-items: center;
        border-radius: 9999px;
        cursor: pointer;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .cosmos-id-sign-in-button:hover, .cosmos-id-sign-in-button:active, .cosmos-id-sign-in-button:focus {
        color: #fff;
        outline: none;
        box-shadow: none;
    }

    .cosmos-id-sign-in-button:active {
        opacity: 0.75;
    }

    .cosmos-id-sign-in-button__icon {
        background-color: #fff;
        color: #000;
        padding: 6px;
        margin-right: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        width: 28px;
        height: 28px;
    }

    .cosmos-id-sign-in-button__label {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-grow: 1;
        padding-right: 28px;
    }
</style>
<a
        class="cosmos-id-sign-in-button"
        href="https://cosmos-id.surge.sh?clientId=<?php echo get_option('cosmos_id_client_id') ?>&redirectUrl=<?php echo wp_login_url() ?>"
>
    <div
            class="cosmos-id-sign-in-button__icon"
    >
        <svg width="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.72 65.81"
             style="shape-rendering: geometricPrecision;">
            <path
                    fill="currentColor"
                    d="M155.09,89.3c-1.14-2-3.53-3-7.11-3a40.63,40.63,0,0,0-10.81,1.89l-1.19.37-.33.1-.17.05-.13-.12a32.89,32.89,0,0,0-54,31l0,.17-.13.12c-.55.5-1.08,1-1.59,1.48-7.38,7.1-10.08,12.5-8,16.07,1.13,2,3.55,2.95,7.21,2.95A44.08,44.08,0,0,0,91.62,138l.17-.05.13.12a32.89,32.89,0,0,0,54-31.33l0-.17.13-.12C154.09,98.91,157.23,93,155.09,89.3Zm-41.38-5.06a28.86,28.86,0,0,1,17.12,5.58l.47.34-.54.2a161,161,0,0,0-24,11.49,162.85,162.85,0,0,0-21.51,14.66l-.45.37-.06-.57a28.81,28.81,0,0,1-.15-2.93A29.18,29.18,0,0,1,113.71,84.24ZM88.37,135a37.83,37.83,0,0,1-9.71,1.72c-2,0-3.27-.4-3.7-1.16-.6-1,.25-4.6,7.24-11.34l.35-.34.16.46a32.69,32.69,0,0,0,5.82,10.17l.31.37Zm4.39-1.4-.14-.15a29.26,29.26,0,0,1-7-12.17l-.05-.19.15-.13a152.66,152.66,0,0,1,22.86-15.87,151.1,151.1,0,0,1,25.71-12l.19-.06.14.14a29.28,29.28,0,0,1,7,11.9l.06.19-.15.13a151.62,151.62,0,0,1-23.37,16.28,153.38,153.38,0,0,1-25.22,11.91Zm21,8.92a28.83,28.83,0,0,1-17.33-5.74l-.46-.34.53-.2A166.61,166.61,0,0,0,120,124.9a165.16,165.16,0,0,0,22.11-15.13l.44-.36.07.57a29.15,29.15,0,0,1-28.95,32.56Zm31.37-40.44-.34.34-.17-.45a32.71,32.71,0,0,0-5.77-9.86l-.31-.37.47-.13A35.82,35.82,0,0,1,148,90.07h0c2,0,3.38.4,3.79,1.11C152.81,92.86,150.22,97,145.08,102.1Z"
                    transform="translate(-71.03 -80.48)"
            ></path>
        </svg>
    </div>
    <div
        class="cosmos-id-sign-in-button__label"
    >
        Sign in with Cosmos
    </div>
</a>