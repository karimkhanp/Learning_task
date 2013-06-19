Use docuement:  http://www.dreamincode.net/forums/topic/244215-introduction-to-creating-a-php-extension-for-windows/

While setting the path for directories take care about the drive where installed C or D?

Then you might get error for :

program files\microsoft sdks\windows\v7.0a\include\ws2tcpip.h(418): error C2371: 'socklen_t' : redefinition; different basic types
1&gt;          c:\wamp\bin\php-5.3.5\main\php.h(150) : see declaration of 'socklen_t'


For this understand what is the error. It's pointing towards multiple declaration nfor socklen_t

So click on both the path and edit :

#ifndef HAVE_SOCKLEN_T

	typedef unsigned int socklen_t;

#endif