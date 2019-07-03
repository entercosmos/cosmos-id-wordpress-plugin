<style>
    .css-hdj4m8,
    .css-hdj4m8 * {
        box-sizing: border-box;
    }

    .css-hdj4m8 {
        display: block;
        cursor: pointer;
        padding: 0px;
        box-sizing: border-box;
        font-family: sans-serif;
        font-size: 12px;
        text-decoration: none;
    }

    .css-addb7f {
        display: flex;
        align-items: center;
    }

    .css-fjpy5r {
        background-color: rgb(51, 170, 255);
        color: rgb(255, 255, 255);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        padding: 6px;
        border-radius: 3px 0px 0px 3px;
    }

    .css-tavhad {
        background-color: rgb(0, 149, 255);
        color: rgb(255, 255, 255);
        font-size: 16px;
        font-weight: 700;
        height: 44px;
        display: flex;
        align-items: center;
        border-radius: 0px 3px 3px 0px;
        padding: 10px 15px;
        flex-grow: 1;
    }
</style>
<a class="pender-account-sign-in-button css-hdj4m8" href="https://account.pender.io?clientId=<?php echo get_option('pender_account_client_id') ?>&redirectUrl=<?php echo wp_login_url() ?>">
    <div class="css-addb7f">
        <div class="css-fjpy5r"><svg height="22" viewBox="0 0 560 560" style="shape-rendering: geometricprecision;">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path d="M91.875,1 C142.616161,1 183.75,42.459443 183.75,93.6022577 L183.75,467.147742 C183.75,518.290557 142.616161,559.75 91.875,559.75 C41.1338386,559.75 6.21400009e-15,518.290557 0,467.147742 L0,93.6022577 C-6.21400009e-15,42.459443 41.1338386,1 91.875,1 Z M410.625,299.75 C328.127465,299.75 261.25,232.872535 261.25,150.375 C261.25,67.8774655 328.127465,1 410.625,1 C493.122535,1 560,67.8774655 560,150.375 C560,232.872535 493.122535,299.75 410.625,299.75 Z" fill="currentColor" fill-rule="nonzero"></path>
                </g>
            </svg></div>
        <div class="css-tavhad">Sign in with Pender</div>
    </div>
</a>