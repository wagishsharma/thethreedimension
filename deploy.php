<?php
 // Init vars
$LOCAL_ROOT         = "/var/www/html";
$LOCAL_REPO_NAME    = "thethreedimension";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "https://github.com/wagishsharma/thethreedimension.git";
$DESIRED_BRANCH     = "master";

// DELETE local repo if it exists
if (file_exists($LOCAL_REPO)) {
    shell_exec("rm -rf {$LOCAL_REPO}");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO} && cd {$LOCAL_REPO} && git checkout {$DESIRED_BRANCH}");

die("done " . mktime());


?>﻿
