<h1>Working with IMAP within PHP</h1>
<h2>Objectives</h2>
<ul>
    <li>Connect to a Gmail account via IMAP within a PHP script</li>
    <li>Download all new messages and return them as an array</li>
    <li>Mark downloaded messages as read and / or archive them within Gmail</li>
</ul>

<h2>What happened</h2>
<p>
    I got the base application and database tables ready for the project this IMAP integration would be a part of, and got the code written that should connect to the IMAP account.
</p>
<h3>IMAP connection code:</h3>
<pre>
    public function getNewMailForAccount(array $imap_account){
        return $this->getNewMail($imap_account['ImapAccount']['server'], $imap_account['ImapAccount']['port'], $imap_account['ImapAccount']['username'] . '@sterling-foundations.com', $imap_account['ImapAccount']['password'], explode(",", $imap_account['ImapAccount']['imap_flags']));
    }

    public function getNewMail($server, $port, $username, $password, $flags = array('')){
        $count = 0;
        $imap_connection = $this->getImapConnection($server, $port, $username, $password, $flags, 'INBOX');

        if(is_resource($imap_connection)){
            $unseen = imap_search($imap_connection, 'UNSEEN');
            $count = $unseen == false ? 0 : count($unseen);
            imap_close($imap_connection);
        } else {
            CakeLog::write('error', 'Failed to open imap connection. Error message: ' . $imap_connection[0]);
        }
        return $count;
    }

    public function getImapConnection($server, $port, $username, $password, $flags, $start_folder = ''){
        $server_spec = $this->getServerSpec($flags, $server, $port, $start_folder);
        $imap_connection = @imap_open($server_spec, $username, $password);
        if ($imap_connection){
            return $imap_connection;
        } else {
            return imap_errors();
        }
    }


    public function getServerSpec($flags, $server, $port, $start_folder = ''){
        $flags = array_unique($flags);
        $flags_as_string = count($flags) > 0 ? implode("/", $flags) : '';
        $server_spec = "{{$server}:$port/$flags_as_string}$start_folder";
        return $server_spec;
    }
</pre>

<p>
    When I tried to run the test, I received an error, which on further investigation revealed that I did not have the imap-ssl module installed in my PHP build.
    I had to abandon the pre-built MAMP application for OSX and install php from scratch, specifying to include the imap-sll module in the build.
    I got the new, built-from-scratch Apache / MySQL / PHP environment running but ran out of time during re-configuration, so I have not yet been able to get a successful IMAP connection.
</p>