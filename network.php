<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>.:CircleCityCon:. [Indianapolis, Indiana]</TITLE>
<META NAME="description" CONTENT="CircleCityCon, Indianapolis, Indiana\'s security conference">
<META NAME="keywords" CONTENT="indianapolis, indiana, indy, indyhacks, indy hackers, indiana hacks, indiana hackers, free hacking tutorials, computer hacking, hardware hacking, download free hacking tools, free hacking program, hacking software, underground hacker, hacking security conference, hacking forum, pen-testing, penetration testing, hacker gathering, lockpicking, hacker news, hacker community, goons, computer exploits, zero day vulnerabilities, 0day, hacker attack, defend against hackers, circle city con, Indianapolis security, indiana security, midwest security, midwest hackers, dc317, defcon 317, def con 317, security conference, hacking, security training, white hat, black hat, grey hat, infosec training, phreaking, passwords, 0day, coding, 2600">
<META NAME="language" CONTENT="EN-US">
<META NAME="revisit-after" CONTENT="5 Days">
<link href="./css/styles.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

<div id="bodyWrapper">
    <?php include "includes/navbar.php"; ?>

    <?php include "includes/header.php"; ?>

            <div id="breadCrumbsWrapper">

                <p>

                    <a href="index.php" title="home">home</a> &gt; network

                </p>

            </div>

            <!--

    ===============================================================================

    -->

            <div id="bodyContent">
                
Net Ops Google Group: "CircleCityConNetOps"

<h2>.:lab:.</h2>
Click here to view the latest lab diagram:
<a href="images/lab_network.jpeg"><img src="images/lab_network_thumb.jpeg" alt="lab diagram" height="100" width="100"></img></a>

Hardware List:

<table>
    <tr><td>hostname</td><td>IP</td><td>Description</td></tr>
    <tr><td>nocserver-1</td><td>10.10.8.20</td><td>Dell Optiplex 755</td></tr>
    <tr><td>firewall-1</td><td>10.10.8.30</td><td>Dell Optiplex 755</td></tr>
    <tr><td>switch-1</td><td></td><td>Cisco 2950</td></tr>
</table>


To Do List:
<li>Need a firewall capable of rate limiting, OR set up PF on the firewall box to prevent getting remote CTF server blacklisted by hosting ISP.</li>
<li>Add 3TB drive to the NOC server</li>
<li>Both Firewall and NOC server need more gigabit cards</li>
<li>Add Rapsbian Mirror to the NOC server</li>
<li>Add Raspberry Pi to the lab network</li>
<li>Connect console on Cisco 2950</li>

<h2>.:con network:.</h2>



            </div>

    <?php include "includes/footer.php"; ?>
</div>
</body>
</html>
