<?php
echo $_SERVER ['AUTH_TYPE'];
echo $_SERVER ['DOCUMENT_ROOT'];
echo $_SERVER ['GATEWAY_INTERFACE'];
echo $_SERVER ['HTTPS'];
echo $_SERVER ['HTTP_ACCEPT'];
echo $_SERVER ['HTTP_ACCEPT_CHARSET'];
echo $_SERVER ['HTTP_ACCEPT_ENCODING'];
echo $_SERVER ['HTTP_ACCEPT_LANGUAGE'];
echo $_SERVER ['HTTP_CONNECTION'];
echo $_SERVER ['HTTP_HOST'];
echo $_SERVER ['HTTP_REFERER']; // VULN
echo $_SERVER ['HTTP_USER_AGENT'];
echo $_SERVER ['ORIG_PATH_INFO']; // VULN
echo $_SERVER ['PATH_INFO']; // VULN
echo $_SERVER ['PATH_TRANSLATED'];
echo $_SERVER ['PHP_AUTH_DIGEST'];
echo $_SERVER ['PHP_AUTH_PW'];
echo $_SERVER ['PHP_AUTH_USER'];
echo $_SERVER ['PHP_SELF'];
echo $_SERVER ['QUERY_STRING']; // VULN
echo $_SERVER ['REDIRECT_REMOTE_USER'];
echo $_SERVER ['REMOTE_ADDR'];
echo $_SERVER ['REMOTE_HOST'];
echo $_SERVER ['REMOTE_PORT'];
echo $_SERVER ['REMOTE_USER'];
echo $_SERVER ['REQUEST_METHOD'];
echo $_SERVER ['REQUEST_TIME'];
echo $_SERVER ['REQUEST_TIME_FLOAT'];
echo $_SERVER ['REQUEST_URI']; // VULN
echo $_SERVER ['SCRIPT_FILENAME'];
echo $_SERVER ['SCRIPT_NAME'];
echo $_SERVER ['SERVER_ADDR'];
echo $_SERVER ['SERVER_ADMIN'];
echo $_SERVER ['SERVER_NAME'];
echo $_SERVER ['SERVER_PORT'];
echo $_SERVER ['SERVER_PROTOCOL'];
echo $_SERVER ['SERVER_SIGNATURE'];
echo $_SERVER ['SERVER_SOFTWARE'];
echo $_SERVER ['argc'];
echo $_SERVER ['argv'];

echo $_SERVER ['HTTP_X_HOGE']; // NOT VULN... TODO
?>