-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 18. lis 2021, 22:45
-- Verze serveru: 10.4.21-MariaDB
-- Verze PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `php_news`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  `dateAdd` datetime NOT NULL,
  `authorId` int(10) UNSIGNED NOT NULL,
  `catId` int(10) UNSIGNED NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `dateAdd`, `authorId`, `catId`, `published`) VALUES
(1, 'Modern PHP data Encr', 'Throughout the years PHP has added support for several extensions, libraries, and algorithms to encrypt and decrypt data. With several libraries and extensions with various levels of maintenance, several algorithms each potentially carrying pros and cons, some even inherently being insecure, it is very difficult to select the appropriate PHP extension, library, encryption constructs, and balance the security and performance.\r\n\r\nmcrypt is one of the oldest PHP extensions to bring encryption/decryption capabilities to PHP. It is no longer maintained, and PHP un-bundled it in PHP 7.2.\r\n\r\nOpenSSL is another library that is more widely adopted, and is actively supported. OpenSSL offers a wide range of cipher, key exchange, and authentication algorithms, and some most of them can be insecure if used at the wrong use use-case. For example, the most common encryption algorithm OpenSSL offers is AES (Advanced Encryption Standard ) has several operations modes and key sizes that leaves rooms for insecure uses of it. From the outset, AES modes such as ECB (Electronic codebook) are not semantically secure, and some modes such as CBC (Cipher block chaining) require authenticating the encrypted messages to be completely secure, and still could be vulnerable to padding oracle attacks, such as POODLE.\r\n\r\nLibsodium, a fork of NaCl is a more modern and heavily opinionated cryptography library. It offers secure and sensible defaults, and takes away a lot of decision making from the end user to library maintainers. PHP. Libsodium is available as a PECL extension, but PHP also includes the extension in PHP core since PHP 7.2. ', '2021-10-26 00:00:00', 1, 3, 1),
(2, 'Compressed HTTP Requ', 'Compression is a vital and effective way to increase the performance of web pages and web apps. For text-based resources such as HTML files, CSS/JS files, SVG files, etc., compressing the resource at the server prior to the transmission, and decompressing it at the browser can greatly reduce the bandwidth and transfer times.\r\n\r\nFor the server and web browser, this compression step is quite opaque, in that the server compresses the resources prior to sending it to the browser, and the browser decompresses them before rendering them. The server-side software and the front-end developers do not need to handle the compression/decompression steps.\r\n\r\nThere are few compression algorithms developed through the years, and browsers and servers can negotiate the correct compression algorithm using HTTP headers.\r\n\r\nWhen making an HTTP request, the browser indicates the encoding algorithms it supports in an Accept-Encoding HTTP header. If the server supports any of the specified encoding algorithms, it may decide to compress the response, and indicate that with an Content-Encoding HTTP header. IANA maintains a list of registered encoding algorithms.', '2021-10-19 00:00:00', 3, 2, 1),
(3, 'How to compile PHP', '<p>Compiling PHP from source on Fedora and Enterprise Linux (RHEL, CentOS, etc.) is quite straight forward, and is on par with how PHP is compiled on Ubuntu/Debian. Using Compiled Binaries Compiled PHP binaries are readily available for Fedora and Fedora-alike operating systems in their default software repositories. For PHP setups that do not require compile-step customizations, it might be easier to install PHP from the software repositories without compiling PHP on the target server. dnf install php The PHP versions available at the default software repositories may not be the latest version. For example, Fedora 34 ships with PHP 7.4, and not PHP 8.0, which is the latest version. Thanks to Remi Collet\'s Remi repo more PHP versions are available to install without having to compile PHP. Instructions on adding this repo is available at the official web site. Once the repository is added, PHP can be installed from the Remi repository: sudo dnf module install php:remi-8.0 Compiling PHP from Source Compiling PHP from its source files entails fetching the PHP source code, installing the compilers and its tools on the server, configuring the build, and finally compiling it. Looking for a TL;DR? A short version of the guide for the copy-paste pleasure is available at the TL;DR section. Prerequisites The Git repository of PHP source code, when cloned, is around 450 MB. PHP source, and its required dependencies will require about 1 GB of empty disk space. The initial setup will also require downloading ~ 600 MB of data from archives. Install Build Tools sudo dnf install git make gcc gcc-c++ binutils glibc-devel autoconf libtool bison re2c automake libxml2-devel The command above install the C compiler, and other tools required to compile PHP. This is similar to installing build-essential package in Debian/Ubuntu systems. Install build tools gcc, gcc-c++ are C/C++ compilers. make is a utility to direct the compilation scripts. autoconf is used to generate the configure script that is used later in the compilation. libtool is a tool that helps to manage and locate shared libraries. bison is YACC-compatible parser generator re2c is a tool that is used to generate the PHP\'s lexer. automake is used to create Makefiles. binutils is a collection of binaries for creating/modifying/extracting archives, displaying binary sizes, information, etc. libxml2-devel is one of the dependencies that PHP uses for its XML support. While it is possible to completely disable it, it is more common to compile PHP with XML support. Fetch PHP Source Code PHP source code is available at php/php-src repository on GitHub. git clone https://github.com/php/php-src.git --branch=master This clones the PHP source code to the current working directory, and checkout the master branch. The master branch contains the latest PHP source code. To fetch a specific PHP version, specify its branch. For example, to checkout PHP 7.4.6: git clone https://github.com/php/php-src.git --branch=PHP-7.4.6 git clone php-src The PHP php-src repository will be cloned to a php-src directory in the current working directory. Once done, cd into the new directory: cd php-src Build ./configure Script Running the buildconf command creates a configuration script inphp-src/configure, which can then be used to configure the build. ./buildconf Run buildconf on php-src On subsequent compilations, it might be necessary to rebuild the ./configure script by running the buildconf command with the --force option. This will ensure the ./configure script is up to date. Run buildconf on php-src and force it Configure the build The ./configure script is used to enable/disable build configurations. This includes enabling/disabling certain PHP modules, enabling specific features of PHP (such as image type toggles for the GD extension, toggle IPv6 support, etc). To view all the configuration flags and options available, run ./configure --help. configure script help The flags shown in the ./configure --help follow a pattern of --enable-XYZ, --disable-XYZ, or --with-XYZ. It accepts multiple flags, and is often a very long one in most PHP setups primed for production use. example ./configure --enable-ftp --with-openssl --disable-cgi --enable-XYZ If the flag is passed, the extension/SAPI/feature with name XXX will be enabled. For extensions, using --enable-XXX=shared pattern makes the extension compiled to a separate file so it can be enabled/disabled from PHP INI files. For example, running ./configure --enable-ftp enables the FTP extension; Running ./configure --enable-ftp=shared enables the extension to be compiled as a shared extension; the extension will be compiled to a separate .so file, so it can be enabled/disabled using a PHP configuration file. Not all extensions support compiling to a shared extension. In addition to extensions, the --enable-XYZ options are available for Server APIs (SAPIs) and specific features as well. Notably, the --enable-zts enables thread-safety feature in the build. --with-XYZ This option is similar to --enable-XYZ pattern that they enable various PHP extensions and features. Note these extensions/features often require additional dependencies. For example, the OpenSSL extension, enabled with ./configure --with-openssl depends on the development files of the OpenSSL library. In Fedora and alike, they can be easily installed with the openssl-devel package. The -devel suffix to the package name indicates that it is a development package. To fulfill the requirements for OpenSSL extension, install libssl-dev package: sudo dnf install openssl-devel Appendix: Extension Dependencies An up-to-date list of extension requirements are listed in Appendix: Extension Dependencies section of this guide. --disable-XYZ and --without-XYZ The opposite of --enable-XYZ flags. The presence of this flag means PHP is configured to include that extension/feature/SAPI by default, unless the --disable-XYZ option is passed. Additionally, the --disable-all flag disables all extensions, which allows a clean slate for individual extensions to be enabled with --enable-XYZ flags. By default, PHP compiles with SQLite support built-in. Disabling the SQLite3 extensions makes it possible to compile PHP without having to install SQLite3 dependencies. ./configure --without-sqlite3 --without-pdo-sqlite Subsequent Builds Calling the ./configure command again and again with several options is cumbersome. When the ./configure script is run, it saves the command to a ./config.nice file, that executes the exact same command as before, and optionally append additional options. After the first ./configure run has completed, using the ./config.nice file helps to avoid typing the same ./configure options again and again. ./config.nice Compile! Once the ./configure/./config.nice script has completed, it is now time to run the compiler. Depending on the CPU cores and threads available, this can take anywhere in the range from 2 minutes to 15-20 minutes. make -j $(nproc) The make command is used to run the compilation using the C compiler. It accepts a -j parameter, that can be used to configure parallel processing. Output of the nproc command, which returns the number of available CPU threads in the system is then set for the make -j parameter. If the -j option is not present, it will use a single CPU thread by default. To set a specific number of threads, simply specify the number for the -j option: make -j4 Install/try it out The compiled binaries will be available in the ./sapi directory. For example, to immediately run the PHP CLI, call the ./sapi/cli/php binary. ./sapi/cli/php -v php -v Alternately, the compiled PHP version can be installed on the system, so other tools can easily use the php binary in PATH. sudo make install sudo make install Appendix: Extension Dependencies Following are command-line arguments can be passed to the ./configure script to enable/disable/configure PHP extensions and features. Core extensions The following extensions are PHP core extensions, and cannot be disabled. Older PHP versions might have had a flag to toggle this extension, but they are not valid anymore for these extensions. Extension Notes Date Hash Core extension since PHP 7.4 JSON Core extension since PHP 8.0 PCRE Pass --without-pcre-jit to Just-In-Time compilation. Since PHP 7.3, it uses PCRE2 Reflection SPL Core extension since PHP 5.3 Enabled by default The following extensions are enabled by default, but can be disabled if necessary. The --disable-all flag also disables all of them. Extension Disable flag Ctype --disable-ctype Fileinfo --disable-fileinfo Filter --disable-filter Opcache --disable-opcache, or --disable-opcache-jit to disable JIT PDO --disable-pdo Phar --disable-phar POSIX --disable-posix Session --disable-session SimpleXML --disable-simplexml SQLite --without-sqlite3 Tokenizer --disable-tokenizer XML --disable-xml XMLReader --disable-xmlreader XMLWriter --disable-xmlwriter Disabled by default Compiling additional extensions often require its dependencies in place. Here is a list of PHP extensions and their dependencies, and the ./configure flag to enable it. The Dependencies column lists the package names in Ubuntu/Debian repositories. Install them using the package manager: sudo dnf install Extension Enable flags Dependencies BCMath --enable-bcmath none BZ2 --enable-bcmath bzip2-devel Curl --with-curl libcurl-devel Exif --enable-exif none FFI --with-ffi libffi-devel FTP --enable-ftp none GD* --enable-gd --with-webp --with-jpeg --with-webp --with-avif libzip-devel libpng-devel libjpeg-dev libwebp-devel libavif-devel GMP --with-gmp gmp-devel IMAP --with-imap --with-imap-ssl --with-kerberos libc-client-dev libkrb5-devel Intl --enable-intl none LDAP --with-ldap openldap-devel Mbstring --enable-mbstring oniguruma-devel OpenSSL --with-openssl libopenssl-dev PDO: MySQL --with-pdo-mysql none PDO: PgSQL --with-pdo-mysql libpq-dev Pspell --with-pspell aspell-devel Readline --with-readline readline-devel Sockets --enable-sockets none Sodium --with-sodium libsodium-devel Soap --enable-soap --with-libxml libxml2-devel Notes GD extensions Avif image support (--with-avif/libavif-devel) is only supported on PHP 8.1 and later. TL;DR The entire list of commands above are shortened below: Initial run: sudo dnf install git make gcc gcc-c++ binutils glibc-devel autoconf libtool bison re2c automake libxml2-devel git clone https://github.com/php/php-src.git --branch=master cd php-src ./buildconf ./configure make -j $(nproc) sudo make install Routine runs: cd php-src git pull --rebase ./buildconf --force ./config.nice make -j $(nproc) sudo make install A ready-to-use ./config.nice is also available.</p>', '2021-11-18 00:00:00', 1, 1, 1),
(5, 'ss', 'ss', '2021-11-05 17:44:41', 2, 2, 1),
(6, 'qq', 'qq', '2021-11-05 17:45:24', 1, 1, 1),
(7, 'ww', '<p>ww</p>', '5522-03-31 00:00:00', 1, 1, 0),
(8, '2312dsdgdf3gsd', '<p>Hello, World!</p>', '2021-11-18 18:19:35', 3, 1, 1),
(9, 'Function Inlining in Zend Engine', 'Zend Engine (PHP) special function inlining modern PHP is fast! It has several performance features such as OPCache, JIT, and other improvements at the compilation step to make smart optimizations for many PHP applications.\n\nInspecting the OPCodes is an easy way to make sure that PHP can make the best optimizations as possible. With the OPCodes listed, it becomes clearer if a given PHP snippet takes the shortest number of OPCodes necessary to perform the intended task.\n\nPHP has several over 30 such functions at the moment, that make use of special OPCodes, or otherwise inlined to improve performance.\n\nOne example to show this effect is the strlen function. It returns the length of a given string, and PHP tries to optimize preemptively.\n\nif (strlen(\'Test\') < 2) {\n    echo \"Test\";\n}\n\nIn this snippet, the strlen function is called on a static string literal, and PHP can eliminate this block completely because the length of the Test string is fixed, and the comparison value is also a static value.\n\nThis is better revealed with the OPCode dump.\n\nPrior to optimization\n\nphp -d opcache.opt_debug_level=0x10000 test.php\n\n0000 JMPZ bool(false) 0002\n0001 ECHO string(\"Test\")\n0002 RETURN int(1)\n\nAfter optimization\n\nphp -d opcache.opt_debug_level=0x20000 test.php\n\n0000 RETURN int(1)\n\nThis example works the other way too, by getting rid of the unnecessary JMP/JMPZ/JMPNZ OPCodes that would be otherwise used in a PHP if block.\n\nif (strlen(\'Test\') < strlen(\'Test Test\')) {\n    echo \"Test\";\n}\n\n0000 ECHO string(\"Test\")\n0001 RETURN int(1)\n\nBecause strlen(\'Test\') < strlen(\'Test Test\') always evaluates to true, the optimized OPCode does not contain any jumps.\nFully-Qualified Function Names\n\nOne caveat with the special function handling is that when a special function call is made inside a namespace, the engine cannot use the special handling because it is possible that a function with the same name is declared later in the program.\n\nnamespace Foo;\n\nif (strlen(\'Test\') < strlen(\'Test Test\')) {\n    echo \"Test\";\n}\n\nNotice how the if block is inside the Foo namespace. The OPCode dump reveals that PHP did not apply the special handling here:\n\nphp -d opcache.opt_debug_level=0x20000 test.php\n\n0000 INIT_NS_FCALL_BY_NAME 1 string(\"Foo\\strlen\")\n0001 SEND_VAL_EX string(\"Test\") 1\n0002 V1 = DO_FCALL_BY_NAME\n0003 INIT_NS_FCALL_BY_NAME 1 string(\"Foo\\strlen\")\n0004 SEND_VAL_EX string(\"Test Test\") 1\n0005 V2 = DO_FCALL_BY_NAME\n0006 T0 = IS_SMALLER V1 V2\n0007 JMPZ T0 0009\n0008 ECHO string(\"Test\")\n0009 RETURN int(1)\n\nMost of the modern PHP code bases use namespaces, and to bring back the special handling, the function names can be prefixed with a backslash (\\), or aliased with the use function clause. They are often called as \"Fully-Qualified Function Names\".\n\nnamespace Foo;\nif (\\strlen(\'Test\') < \\strlen(\'Test Test\')) {\n    echo \"Test\";\n}\n\nor\n\nnamespace Foo;\nuse strlen;\nif (strlen(\'Test\') < strlen(\'Test Test\')) {\n    echo \"Test\";\n}\n\nBoth snippets above signal the engine that the strlen calls are indeed for the internal strlen function, which allows the engine to go ahead and inline them.\n\nWith FQFNs, the engine can again apply its magic:\n\n0000 ECHO string(\"Test\")\n0001 RETURN int(1)\n\n    The gist of this article is that, when calling PHP internal functions, specially functions with inlining features, always make the fully-qualified function names to enable engine optimizations on them.\n\nList of Functions with Special Handling\n\nAll of the following functions have special handling within the Zend Engine, and can benefit from them if called as a Fully-Qualified Function Name.\n\n    array_key_exists\n    array_slice\n    boolval\n    call_user_func\n    call_user_func_array\n    chr\n    count\n    defined\n    doubleval\n    floatval\n    func_get_args\n    func_num_args\n    get_called_class\n    get_class\n    gettype\n    in_array\n    intval\n    is_array\n    is_bool\n    is_double\n    is_float\n    is_int\n    is_integer\n    is_long\n    is_null\n    is_object\n    is_resource\n    is_scalar\n    is_string\n    ord\n    sizeof\n    strlen\n    strval\n\nList up to date until PHP 8.1. Source', '2021-11-19 00:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `author`
--

CREATE TABLE `author` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8_czech_ci NOT NULL,
  `surname` varchar(10) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `author`
--

INSERT INTO `author` (`id`, `name`, `surname`) VALUES
(1, 'pepa', 'dvorak'),
(2, 'tomas', 'zeleny'),
(3, 'evžen', 'hrubý');

-- --------------------------------------------------------

--
-- Struktura tabulky `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `kategorie`
--

INSERT INTO `kategorie` (`id`, `name`) VALUES
(1, 'krimi'),
(2, 'it'),
(3, 'fun');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorId` (`authorId`),
  ADD KEY `catId` (`catId`);

--
-- Indexy pro tabulku `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pro tabulku `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `author` (`id`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`catId`) REFERENCES `kategorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
