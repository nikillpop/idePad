

             <ul>
                 
               <li style="color:#ddd">
               <span style="max-width:400px;overvflow:hidden;display:block;float:left">
                <?php echo function_exists('posix_getuid') ? 'UID: '.@posix_getuid().' => euid: '.@posix_geteuid() : ''; ?>
                 &nbsp;&nbsp;|&nbsp;&nbsp;
				PHP USER: <?php $user = function_exists('posix_getpwuid') ? @posix_getpwuid(@posix_geteuid()) : exec('whoami'); echo is_array($user) ? $user['name']:$user; ?> 
               </span>  
                <span style="max-width:220px;overvflow:hidden;display:block;float:left">
                  &nbsp;&nbsp;|&nbsp;&nbsp;
                SERVER: <?php echo $_SERVER['SERVER_SOFTWARE']; ?>
                 &nbsp;&nbsp;|&nbsp;&nbsp;
               </span>
			<span style="max-width:600px;overvflow:hidden;display:block;float:left">
               <?php echo 'PHP version: ' . phpversion(); ?>
                &nbsp;&nbsp;|&nbsp;&nbsp;               
                 YOUR OS(php): <?php echo \PFC\Editor\OS::getOS(); ?>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                 YOUR Browser(php): <?php echo \PFC\Editor\OS::getBrowser(); ?>
                
             </span>
               
               </li>
             </ul>


             <span id="copy" style="width:auto">
               
				<a id="pfc-editor-about-href" href="#" class="pfc-editor-page-href">
				    about[&copy; <?php echo date('Y'); ?>]
			    </a>
              
             </span>
