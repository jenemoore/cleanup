#!C:\perl\bin\perl.exe
#
# inorout.pl script
#
# Test the clients IP and link to correct page based on inside or outside library firewall
#
# If LAN IP
#   In library goes to schedule.warrenville.com
# else WAN IP
#   outside library goes to www.warrenville.com:8080
#
$your_ip = $ENV{'REMOTE_ADDR'};
$part_ip = substr($your_ip, 0, 6);
if ($part_ip == "10.0.0")
{ print "Location: http://schedule.warrenville.com/evanced/lib/eventcalendar.asp\n\n";
}
else
{ print "Location: http://www.warrenville.com:8080/evanced/lib/eventcalendar.asp\n\n";
}
exit (0);
