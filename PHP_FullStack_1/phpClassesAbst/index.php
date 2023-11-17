<?php 
    require_once('classVideo.php');
    require_once('classVisualization.php');
    require_once('classAudience.php');

        $v[0] = new Video('Video1');
        $v[1] = new Video('Video2');
        $v[2] = new Video('Video3');

            $a[0] = new Audience('Pessoa',22,'M','sex','ge');

            $vis[0] = new Visualization($g[0],$v[2]);

            $v[0] = new Video('test');

            $p[0] = new Person('Nerd','ete','test','wa');

            $vis[1] = new Visualization($g[0],$v[1]);

    ?> 