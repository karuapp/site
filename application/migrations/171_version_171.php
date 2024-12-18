<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Version_171 extends CI_Migration
{
    function __construct()
    {
        parent::__construct();
    }

    public function up()
    {
       update_option('update_info_message', '<div class="col-md-12">
        <div class="alert alert-success bold">
            <h4 class="bold">Hi! Thanks for updating clientflow CRM - You are using version 1.7.1</h4>
            <p>
                This window will reload automaticaly in 10 seconds and will try to clear your browser cache, however its recomended to clear your browser cache manually.
            </p>
        </div>
    </div>
    <script>
        setTimeout(function(){
            window.location.reload();
        },10000);
    </script>
    ');
   }
}
