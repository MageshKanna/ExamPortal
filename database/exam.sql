-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2018 at 07:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `abhi_question`
--

CREATE TABLE `abhi_question` (
  `que_id` int(5) NOT NULL,
  `que_desc` varchar(250) DEFAULT NULL,
  `ans1` varchar(250) DEFAULT NULL,
  `ans2` varchar(250) DEFAULT NULL,
  `ans3` varchar(250) DEFAULT NULL,
  `ans4` varchar(250) DEFAULT NULL,
  `true_ans` int(1) DEFAULT '0',
  `subject` varchar(30) NOT NULL DEFAULT 'java'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abhi_question`
--

INSERT INTO `abhi_question` (`que_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `subject`) VALUES
(1, 'If you wanted to convey the most severe type of hazard, which word would you use?', 'Warning', 'Notice', 'Danger', 'Caution', 3, 'Artisan'),
(2, 'Which of the following statements about the Java language is true?', 'Java supports only Procedural Oriented Programming approach', 'Both Procedural and Object Oriented Programming are supported in Java', 'Java supports only Object Oriented Programming approach', 'None of the Above\r\n', 3, 'java'),
(3, 'JVM stands for?', 'Java Verified Machine', 'Java Virtual Machine 	', 'Java Very large Machine 	', 'Java Very small machine', 2, 'java'),
(4, 'Java source files are compiled and converted to', 'Object code', 'machine code', 'Bytecode', 'executable file', 3, 'java'),
(5, 'JVM is  ___________for bytecode', 'a compiler', 'an interpreter', 'assembler', 'none of the above', 2, 'java'),
(6, 'What is the size of int data type in java?', '1 bytes', '2 bytes', '4 bytes', '8 bytes', 3, 'java'),
(7, 'Which is a valid float literal?', '1.23', '2', '1.23d', '1.23f', 4, 'java'),
(8, 'What is the numerical range of a char in Java?', ' -128 to 127', '0 to 256', '0 to 32767', '0 to 65535', 4, 'java'),
(9, 'Which of these coding types is used for data type char in Java?', 'ASCII', 'ISO-LATIN-1', 'UNICODE', 'None of the mentioned', 3, 'java'),
(10, 'Which of these values can a boolean variable contain?', 'True & False', '0 & 1', 'Any integer value', 'Both a & b', 1, 'java'),
(11, 'Which one of the following is a valid identifier in java?', 'x1', '1x', '$x', 'x  1', 1, 'java'),
(12, 'Which one is the short circuit AND operator?', '&', '&&', '|', ' ||', 2, 'java'),
(13, 'Which operator is used to implement unsigned right shift of an integer?', ' <<', '>>', '<<<', '>>> ', 4, 'java'),
(14, 'Which one of the following is a jump statement in java?', 'goto', 'jump', 'break', 'if', 3, 'java'),
(15, 'Which of these operators is used to allocate memory to array variable in Java?', 'malloc', 'alloc', 'new', 'new malloc', 3, 'java'),
(16, 'What is the output of this program?\r\n\r\n	 class increment {\r\n       		 public static void main(String args[]) \r\n	        	{        \r\n       		      	int g = 3;\r\n             		System.out.print(++g * 8);\r\n        		} \r\n    			}\r\n', '25', '24', '32', '33', 3, 'java'),
(17, 'Which of the following loops will execute the body of loop even when condition controlling the loop is initially false?', 'do-while', 'while', 'for', 'None of the mentioned', 1, 'java'),
(18, 'Which of these is necessary condition for automatic type conversion in Java?', 'The destination type is smaller than source type.', 'The destination type is larger than source type.', 'The destination type can be larger or smaller than source type.', 'None of the mentioned', 2, 'java'),
(19, 'What is the error in this code?\r\n 	byte b = 50;\r\n 	b = b * 50;\r\n', ' b can not store the result 2500, limited by its range', '* operator has converted b * 50 into int, which can not be converted to byte without casting.', 'b can not contain value 50.', 'No error in this code', 2, 'java'),
(20, 'Which of these is an incorrect array declaration?', 'int arr[] = new int[5];', 'int [] arr = new int[5];', 'int arr[];\r\n    arr = new int[5];\r\n', 'int arr[] = int [5] new', NULL, 'java'),
(21, 'Which of these selection statements test only for equality?', 'if', 'switch', 'Both a & b', 'None of the mentioned', 2, 'java'),
(22, 'Which of these are selection statements in Java?', 'if', 'for', 'continue', 'all of these', 1, 'java'),
(23, 'Which of these jump statements can skip processing remainder of code in its body for a particular iteration?', 'break', 'return', 'exit', 'continue', 4, 'java'),
(24, 'What is the value of the expression 2 & 3 ?', '2', '3', '6', '5', 1, 'java'),
(25, 'The bitwise XOR operator is denoted by', '&', '|', '~', '^', 4, 'java'),
(26, 'What is the value of the expression 8 << 2 ?', '2', '32', '1 6', '5', 2, 'java'),
(27, 'The keyword used to create a constant variable', 'const', 'static', 'final', 'none of these', 3, 'java'),
(28, 'What is stored in the object obj in following lines of code?  box obj;', 'Memory address of allocated memory of object.', 'NULL', 'Any arbitrary pointer', 'Garbage', 2, 'java'),
(29, 'Which of the following is a valid declaration of an object of class Box?', 'Box obj = new Box();', 'Box obj = new Box;', 'obj = new Box();', 'new Box obj;', 1, 'java'),
(30, 'Name the keyword that makes a variable belong to a class, rather than being defined for each instance of the class. ', 'static', 'final', 'abstract', 'public', 1, 'java'),
(31, 'Variables declared with in a class are called ', 'Identifier', 'local variable', 'instance variable', 'global variable', 3, 'java'),
(32, 'Variables declared within a method or block are called', 'Static variable', 'local variable', 'instance variable', 'global variable', 2, 'java'),
(33, 'Defining methods with same name and different no. of parameters are called', 'Method overriding', 'method overloading', 'Dynamic method dispatch', 'none of the above', 2, 'java'),
(34, '_________ is used to initialize objects.', 'Methods', 'arguments', 'constructors', 'new keyword', 3, 'java'),
(35, 'What is the return type of Constructors?', 'int', 'float', 'void', 'None of the mentioned', 4, 'java'),
(36, 'Which of the following is a method having same name as that of its class?', 'finalize', 'delete', 'class', 'constructor', 4, 'java'),
(37, 'Which operator is used by Java run time implementations to free the memory of an object when it is no longer needed?', 'delete', 'free', 'new', 'None of the mentioned.', 4, 'java'),
(38, 'Which of these access specifiers must be used for main() method?', 'private', 'public', 'protected', 'None of the mentioned', 2, 'java'),
(39, 'Which of these is used to access member of class before object of that class is created?', 'public', 'private', 'static', 'protected', 3, 'java'),
(40, 'The keyword used to create an object', 'class', 'this', 'new', 'malloc', 3, 'java'),
(41, 'The keyword used to refer the current object', 'class', 'this', 'new', 'malloc', 2, 'java'),
(42, 'The method which is automatically invoked during garbage collection', 'destructor', 'terminate()', 'finalize()', 'destroy()', 3, 'java'),
(43, 'Which class cannot have a subclass in java', 'abstract class', 'parent class	', 'final class', 'None of above', 3, 'java'),
(44, 'Which is the keyword used to inherit a class to another?', 'Inherits', 'extends', 'implements', 'import', 2, 'java'),
(45, 'The use of final keyword with method definition ', 'Supports method overriding', 'implements dynamic method dispatch', 'Prevents method overriding', 'none of these', 3, 'java'),
(46, 'Identify the type of inheritance when two or more subclasses inherit the properties of a super class', 'Multiple inheritance', 'Single inheritance	', 'Multilevel inheritance	', 'Hierarchical inheritance', 4, 'java'),
(47, 'The keyword used inside a class to refer to its immediate super class is', 'super', 'parent', 'base', 'none of these', 1, 'java'),
(48, 'which of the following is true in the case of abstract class', 'Abstract constructors cannot be created.', 'Abstract classes can not be inherited.', 'An abstract class contains only abstract methods.', 'All of the above.', 1, 'java'),
(49, 'Which of these keywords are used to define an abstract class?', 'abst', 'abstract', 'Abstract', 'abstract class', 2, 'java'),
(50, 'if a class inheriting an abstract class does not define all of its function then it will be\r\n\r\n', 'abstract', 'A simple class', 'Static class', 'None of the mentioned', 1, 'java'),
(51, 'Variables/functions in PHP don\\’t work directly with:', 'echo()', 'isset()', 'print()', 'All of the above', 2, 'php'),
(52, 'What is the output of the following code?', 'Array ([x]=>9 [y]=>3 [z]=>-7)', 'Array ([x]=>3 [y]=>2 [z]=>5)', 'Array ([x]=>12 [y]=>5 [z]=>-2)', 'Error', 3, 'php'),
(53, 'Which of the following multithreaded servers allow PHP as a plug-in?', 'Netscape FastTrack', 'Microsoft\\’s Internet Information Server', 'O\\’Reilly\\’s WebSite Pro', 'All of the above', 4, 'php'),
(54, 'Which of the following statements is incorrect with regard to interfaces?', 'A class can implement multiple interfaces', 'An abstract class cannot implement multiple interfaces', 'An interface can extend multiple interfaces', 'Methods with same name, arguments and sequences can exist in the different interfaces implmented by a class', 4, 'php'),
(55, 'Which of the following type cast is not correct?', 'real', 'double', 'decimal', 'boolean', 3, 'php'),
(56, 'What will be the output of the following code?\r\n$var = 10;\r\nfunction fn ()\r\n{\r\n$var = 20;\r\nreturn $var;\r\n}\r\nfn ();\r\necho $var;', '10', '20', 'Undefined Variable', 'Syntax Error', 1, 'php'),
(57, 'which of the following is a correct declaration', 'static $varb = array(1,\\’val\\’,3);', 'static $varb = 1+(2*90);', 'static $varb = sqrt(81);', 'static $varb = new Object;', 1, 'php'),
(58, 'which of the following pair have non-associative equal precedence?', '. +,-', ' ==, !=', '=!=', '&=, |=', 2, 'php'),
(59, 'Which of the following attribute is needed for file upload via form?', 'enctype=\\’multipart/form-data\\’', 'enctype=\\’singlepart/data\\’', 'enctype=\\’file\\’', 'enctype=\\’form-data/file\\’', 1, 'php'),
(60, 'The inbuilt function to get the number of parameters passed is:', 'arg_num()', ' func_args_count()', ' func_num_args()', 'None of the above', 3, 'php'),
(61, ' Consider the following two statements:\r\nI while (expr) statement\r\nII while (expr): statement… endwhile;\r\nWhich of the following are true in context of the given statements?', ' I is correct and II is wrong', ' I is wrong and II is correct', 'Both I & II are wrong', 'Both I & II are correct', 4, 'php'),
(62, 'Multiple select/load is possible with:', 'Checkbox', 'Select', 'File', 'All of the above', 2, 'php'),
(63, 'Which of the following statement is not correct for PHP?', 'It is a server side scripting language', 'A PHP file may contain text, html tags or scripts', 'It can run on windows and Linux systems only', 'It is compatible with most of the common servers used today', 3, 'php'),
(64, 'Which of the following printing construct/function accpets multiple parameters?', 'echo', 'print', 'printf', 'All of the above', 1, 'php'),
(65, 'Which of the following is not a predefined constant?', 'TRUE', 'FALSE', 'NULL', '_FILE_', 4, 'php'),
(66, ' Which of the following vaiables is not related to file uploads?', 'max_file_size', 'max_execution_time', 'post_max_size', 'max_input_time', 4, 'php'),
(67, ' What will be the output of the following code?\r\nfunction fn (&$var)\r\n{\r\n$var = $var – ($var/10*5);\r\nreturn $var;\r\n}\r\necho fn(100);', '100', '50', '98', 'Error message', 4, 'php'),
(68, 'What will be the output of following code?$a = 10;echo \\‘Value of a = $a\\’;', 'Value of a = 10', ' Value of a = $a', 'Undefined', 'Syntax Error', 1, 'php'),
(69, 'What will be the output of the following code?\r\n$Rent = 250;\r\nfunction Expenses($Other)\r\n{\r\n$Rent = 250 + $Other;\r\nreturn $Rent;\r\n}\r\nExpenses(50);\r\necho $Rent;', '300', '250', '200', ' Program will not compile', 2, 'php'),
(70, 'Which of the following variable declarations within a class is invalid in PHP5?', ' private $type = \\‘moderate\\’;', 'internal $term= 3;', ' public $amnt = \\‘500\\’;', 'protected $name =\\‘Quantas Private Limited\\’;', 2, 'php'),
(71, 'Which of the following is used to maintain the value of a variable over different pages?', 'static', 'global', 'session_register', 'None of the above', 3, 'php'),
(72, 'How would you store order number (34) in an \\‘OrderCookie\\’?', 'setcookie(\\‘OrderCookie\\’,34);', 'makeCookie(\\‘OrderCookie\\’,34);', 'Cookie(\\‘OrderCookie\\’,34);', 'OrderCookie(34);', 1, 'php'),
(73, 'Which of the following regular expressions can be used to check the validity of an e-mail addresses?', ' ^[^@ ]+@[^@ ]+.[^@ ]+$', '^[^@ ]+@[^@ ]+.[^@ ]+$', ' $[^@ ]+@[^@ ]+.[^@ ]+^', '$[^@ ]+@[^@ ]+.[^@ ]+^', 2, 'php'),
(74, 'You wrote the following script to check of the right categoryCorrect category!Incorrect category!What will be the output of the program if value of \\‘cate\\’ remains 5?', 'Correct category!', 'incorrect category!', 'Error due to use of invalid operator in line 6:\\’if ($cate==5)\\’', 'Error due to incorrect syntax at line 8, 10, 12 and 14', 1, 'php'),
(75, 'Which of the following is not supported in PHP5?', 'Type Hinting', ' Reflection', ' Magic Methods', 'Multiple Inheritanc', 4, 'php'),
(76, 'What will be the output of the following code?\r\necho 30*5 . 7;', '150.7', '1507', '150.7', 'you can\\’t concatenate integers', 2, 'php'),
(77, 'In your PHP application you need to open a file. You want the application to issue a warning\r\nand continue execution, in case the file is not found. The ideal function to be used is: ', 'include()', 'require()', 'nowarn()', 'getFile(false)', 1, 'php'),
(78, ' What will be the output of the following code?', 'int(3*4)', 'int(12)', '3*4', '12', 2, 'php'),
(79, 'You need to count the number of parameters given in the URL by a POST operation. The correct way is:', 'count($POST_VARS);', 'count($POST_VARS_PARAM);', 'count($_POST);', ' count($HTTP_POST_PARAM);', 3, 'php'),
(80, 'Which of the following is correct with regard to echo and print?', 'echo is a construct and print is a function', 'echo is a construct and print is a function', 'Both are functions', ' Both are constructs', 4, 'php'),
(81, 'How would you start a session?', 'session(start);', 'session();', 'session_start();', ' begin_session();', 3, 'php'),
(82, 'What will be the output of following code?$a = 10;echo \\‘Value of a = $a\\’;', 'Value of a = 10', 'value of a = $a', 'Undefined', 'syntax Error', 1, 'php'),
(83, 'Which of the following is not true regarding XForms?', 'PHP provides support for XForm', ' It can be used on PDF documents', ' The data is sent in XML format', 'The action and method parameters are defined in the body', 4, 'php'),
(84, 'You have defined three variables $to, $subject and $body to send an email. Which of the following\r\nmethods would you use for sending an email? ', 'mail($to,$subject,$body)', ' sendmail($to,$subject,$body)', 'mail(to,subject,body)', 'sendmail(to,subject,body)', 1, 'php'),
(85, 'Which of the following are useful for method overloading?', '__call, __get, __set', ' __get,__get,__load', '__overload', ' __call, __get, __load', 1, 'php'),
(86, ' Which of the following is a PHP resource?', 'Domxml document', 'Odbc link', 'File', ' All of the above', 4, 'php'),
(87, 'JSP page perform request processing by calling _______ method ?', ' service method', 'jspService method', '_jspService method', 'jsp_Service method', 3, 'ajava'),
(88, 'Choose a incorrect statement from the following.', 'JSP pages are easier to maintain than a servlet', 'The Web Container translate a Servlet into JSP page', 'JSP is built on Java Technology so it is platform independent', 'A JSP page seperates presentation and business logic.', 2, 'ajava'),
(89, 'Which statement about jspInit() is true ?', 'It does not have access to ServletConfig.', 'It does not have access to ServletContext.', 'It is called only once.', 'It cannot be overridden.', 3, 'ajava'),
(90, 'Which method in JSP is used to perform cleanup ?', 'jspDestroy()', 'destroy()', '_jspDestroy()', 'jsp_Destroy()', 1, 'ajava'),
(91, '_jspService() method of HttpJspPage class should not be overridden.', 'True', 'False', 'Can\\\'t say.', 'None of the above.', 1, 'ajava'),
(92, 'Which of the following attributes are mandatory in <jsp:useBean /> tag?', 'id, type', 'id, class', 'type, class', 'type,property', 2, 'ajava'),
(93, 'How to pass information from JSP to included JSP?', 'Using <%jsp:param> tag.', 'Using <%jsp:page> tag.', 'Using <%jsp:import> tag.', 'Using <%jsp:useBean> tag.', 2, 'ajava'),
(94, 'In which folder we can put web.xml?', 'Class', 'Package', 'Web-INF', 'Webapps', 3, 'ajava'),
(95, 'Which is the life-cycle procedure?', 'constructor call=>class loading=>init()=>service()=>destroy()', 'constructor call=> init()=>class loading=>service()=>destroy()', 'class loading=>constructor call=>init()=>service()=>destroy()', 'constructor call=>class loading=>service()=>init()=>destroy()', 1, 'ajava'),
(96, 'In JSP Action tags which tags are used for bean development? ', 'jsp:useBean', 'jsp:setPoperty', 'jsp:getProperty', 'All mentioned above', 4, 'ajava'),
(97, 'Which object of HttpSession can be used to view and manipulate information about a session? ', 'session identifier', 'creation time', 'last accessed time', 'All mentioned above', 4, 'ajava'),
(98, ' Which of these ways used to communicate from an applet to servlet? ', 'RMI Communication', 'HTTP Communication', 'Socket Communication', 'All mentioned above', 4, 'ajava'),
(99, 'Which type of ServletEngine is a server that includes built-in support for servlets? ', 'Add-on ServletEngine', 'Embedded ServletEngine', 'Standalone ServletEngine', 'None of the above', 3, 'ajava'),
(100, 'What type of servlets use these methods doGet(), doPost(),doHead, doDelete(), doTrace()?', 'Genereic Servlets', 'HttpServlets', 'All of the above', 'None of the above', 2, 'ajava'),
(101, 'Sessions is a part of the SessionTracking and it is for maintaining the client state at server side. ', ' True', 'False', 'can\\\'t say', 'None of the above', 1, 'ajava'),
(102, 'Which method is used to send the same request and response objects to another servlet in RequestDispacher ? ', 'forward()', 'sendRedirect()', 'Both A & B', 'None of the above', 1, 'ajava'),
(103, 'Which packages represent interfaces and classes for servlet API?', 'javax.servlet', 'javax.servlet.http', 'Both A & B', 'None of the above', 3, 'ajava'),
(104, 'Which method in session tracking is used in a bit of information that is sent by a web server to a browser and which can later be read back from that browser?', 'HttpSession', 'URL rewriting', 'Cookies', 'Hidden form fields', 3, 'ajava'),
(105, 'The life cycle of a servlet is managed byThe life cycle of a servlet is managed by', 'servlet context', 'servlet container', 'the supporting protocol (such as http or https)', 'all of the above', 2, 'ajava'),
(106, 'How many ServletContext objects are available for an entire web application?', 'One each per servlet', 'One each per request', 'One each per response', 'Only one', 4, 'ajava'),
(107, 'How many JDBC driver types does Sun define?', 'One', 'Two', 'Three', 'Four', 4, 'ajava'),
(108, 'Which JDBC driver Type(s) can be used in either applet or servlet code?', 'Both Type 1 and Type 2', 'Both Type 1 and Type 3', 'Both Type 3 and Type 4', 'Type 4 only', 3, 'ajava'),
(109, 'JDBC stands for:', 'Java Database Connectivity', 'Java Database Components', 'Java Database Control', 'None of the above is correct', 1, 'ajava'),
(110, 'Which of the following is advantage of using JDBC connection pool?', 'Slow performance', 'Using more memory', 'Using less memory', 'Better performance', 4, 'ajava'),
(111, 'Which of the following is advantage of using PreparedStatement in Java?', 'Slow performance', 'Encourages SQL injection', 'Prevents SQL injection', 'More memory usage', 3, 'ajava'),
(112, 'Which JDBC driver Type(s) is(are) the JDBC-ODBC bridge?', 'Type 1', 'Type 2', 'Type 3', 'Type 4', 1, 'ajava'),
(113, 'Which of the following is method of JDBC batch process?', 'setBatch()', 'deleteBatch()', 'removeBatch()', 'addBatch()', 4, 'ajava'),
(114, 'Which of the following is used to rollback a JDBC transaction?', 'rollback()', 'rollforward()', 'deleteTransaction()', 'RemoveTransaction()', 1, 'ajava'),
(115, 'Which JDBC type represents a single precision floating point number that supports seven digits of mantissa', 'REAL', 'DOUBLE', 'FLOAT', ' INTEGER', 1, 'ajava'),
(116, 'Which method is used to establish the connection with the specified url in a Driver Manager class? ', 'public static void registerDriver(Driver driver)', 'public static void deregisterDriver(Driver driver)', 'public static Connection getConnection(String url)', 'public static Connection getConnection(String url,StringuserName,String password)', 3, 'ajava'),
(117, 'How does Tomcat execute a JSP?', 'As a CGI script', 'As an independent process', 'By one of Tomcat\\\'s threads', 'None of the above is correct.', 3, 'ajava'),
(118, 'What is invoked via HTTP on the Web server computer when it responds to requests from a user\\\'s Web browser?', 'A Java application', 'A Java applet', 'A Java servlet', 'None of the above is correct.', 3, 'ajava'),
(119, 'Which JDBC driver Type(s) can you use in a three-tier architecture and if the Web server and the DBMS are running on the same machine?', 'Type 1 only', 'Type 2 only', 'Both Type 3 and Type 4', 'All of Type 1, Type 2, Type 3 and Type 4', 4, 'ajava'),
(120, 'Which is used to store data and partial results, as well as to perform dynamic linking, return values for methods, and dispatch exceptions?', 'Window', 'Panel', 'Frame', 'Container', 3, 'ajava'),
(121, 'Which interfaces provide methods for batch processing in JDBC? ', 'java.sql.Statement', 'java.sql.PreparedStatement', 'All the above', 'None of the above', 3, 'ajava'),
(122, 'The following\r\na) It is lightweight.\r\nb) It supports pluggable look and feel.\r\nc) It follows MVC (Model View Controller) architecture\r\nare the advantages of _____ . \r\n', 'Swing', 'AWT', 'Both A & B', 'None of the above', 1, 'ajava'),
(123, 'Swing is not a part of JFC (Java Foundation Classes) that is used to create GUI application ', 'True', 'False', 'can\\\'t say', 'None of the above', 2, 'ajava'),
(124, 'Which of the following statements about GUI components is wrong?', 'Swing exists since version 1.2 of the JDK', 'You can not place AWT components on Swing containers', 'AWT stands for Abstract Window Toolkit', 'The AWT classes are deprecated', 4, 'ajava'),
(125, 'Package of drawstring() method is in?', 'java.applet', 'java.io', 'java.awt', 'javax.swing', 3, 'ajava'),
(126, 'The Swing Component classes that are used in Encapsulates a mutually exclusive set of buttons?', 'AbstractButton', 'ButtonGroup', 'JButton', 'ImageIcon', 2, 'ajava'),
(127, 'For the questions below, please choose the best option to complete the sentence or conversation.\r\nWhen can we meet again?', 'When are you free?', 'It was two days ago', 'Can you help me?', 'None of the above', 1, 'grammar'),
(128, 'For the questions below, please choose the best option to complete the sentence or conversation.\r\nMy aunt is going to stay with me.', 'How do you do?', 'How long for?', 'How was it?', 'None of the above', 2, 'grammar'),
(129, 'For the questions below, please choose the best option to complete the sentence or conversation.\r\nWhen do you study?', 'at school', 'in the evenings', 'in the library', 'None of the above', 2, 'grammar'),
(130, 'For the question below, please choose the best option to complete the sentence or conversation.<br>Would you prefer lemonade or orange juice?', 'Have you got anything else?', 'If you like.', 'Are you sure about that?', 'None of the above', 1, 'grammar'),
(131, 'For the question below, please choose the best option to complete the sentence or conversation.\nLet\\\'s have dinner now.', 'You aren\\\'t eating.', 'There aren\\\'t any.', 'Tom isn\\\'t here yet', 'None of the above', 3, 'grammar'),
(132, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nThe snow was ...... heavily when I left the house.', 'dropping', 'landing', 'falling', 'descending', 3, 'grammar'),
(133, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nI can\\\'t find my keys anywhere - I ...... have left them at work.', 'can', 'must', 'ought', 'would', 2, 'grammar'),
(134, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nWhen a car pulled out in front of her, Jane did well not to ...... control of her bicycle.', 'miss', 'lose', 'fail', 'dro', 2, 'grammar'),
(135, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nAccording to Richard\\\'s ...... the train leaves at 7 o\\\'clock.', 'opinion', 'advice', 'knowledge', 'information', 4, 'grammar'),
(136, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nWhen you stay in a country for some time you get used to the people\\\'s ...... of life.', 'habit', 'custom', 'way', 'system', 3, 'grammar'),
(137, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nThe builders are ...... good progress with the new house.', 'getting', 'doing', 'making', 'taking', 3, 'grammar'),
(138, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nShe is now taking a more positive ...... to her studies and should do well.', 'attitude', 'behavior', 'manner', 'style', 1, 'grammar'),
(139, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nMy father ...... his new car for two weeks now.', 'has had', 'has', 'is having', 'had', 1, 'grammar'),
(140, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nWhat differences are there ...... the English spoken in the UK and the English spoken in the US?', 'among', 'between', 'beside', 'with', 2, 'grammar'),
(141, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nAt 6 p.m. I started to get angry with him because he was late ......', 'as usual.', 'in general.', 'typically.', 'usually.', 1, 'grammar'),
(142, 'For the question below, please choose the best option to complete the sentence or conversation....... you get your father\\\'s permission, I\\\'ll take you skiing next weekend.', 'Although', 'Provided', 'As', 'Unless', 2, 'grammar'),
(143, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nA local company has agreed to ...... the school team with football shirts.', 'contribute', 'supply', 'give', 'produce', 2, 'grammar'),
(144, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nI really enjoy stories that are ...... in the distant future.', 'found', 'set', 'put', 'placed', 2, 'grammar'),
(145, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nThat old saucepan will come in ...... when we go camping.', 'convenient', 'fitting', 'handy', 'suitable', 3, 'grammar'),
(146, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nAnyone ...... after the start of the play is not allowed in until the interval.', 'arrives', 'has arrived', 'arriving', 'arrived', 3, 'grammar'),
(147, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nI didn\\\'t ...... driving home in the storm so I stayed overnight in a hotel.', 'fancy', 'desire', 'prefer', 'want', 1, 'grammar'),
(148, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nThe judge said that those prepared to...... in crime must be ready to suffer the consequences.', 'involve', 'engage', 'undertake', 'enlist', 2, 'grammar'),
(149, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nMarianne seemed to take ...... at my comments on her work.', 'annoyance', 'insult', 'offence', 'indignation', 3, 'grammar'),
(150, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nYou should not have a dog if you are not ...... to look after it.', 'prepared', 'adapted', 'arranged', 'decided', 1, 'grammar'),
(151, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nThe farmhouse was so isolated that they had to generate their own electricity ......', 'current.', 'supply.', 'grid.', 'power.', 2, 'grammar'),
(152, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nI __________ I pass my driving test.', 'expect ', 'hope', 'wait', 'think', 2, 'grammar'),
(153, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nHow __________ does it take to get to the railway station from your house?', 'long ', 'much ', 'often', 'far', 1, 'grammar'),
(154, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nWould you like __________ jam on your bread?', 'some', 'few ', 'little ', 'a', 1, 'grammar'),
(155, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nWe moved to this town two years __________ .', 'behind ', 'last ', 'passed ', 'ago', 4, 'grammar'),
(156, 'For the question below, please choose the best option to complete the sentence or conversation.\r\nMaria gave ______________________________ for his birthday.', 'a football her little brother ', 'to her little brother a football ', 'her little brother a football ', 'a football for her little brother', 3, 'grammar'),
(157, 'Fill in the blanks-\r\nA committee has been…………..to…………..the transformation of the city into an International finance centre.', 'constituted, convert', 'appointed, oversee', 'converged, evaluate', 'inducted, change', 2, 'grammar'),
(158, 'Fill in the blanks-\r\nKeeping in mind the…………..to develop the sector the government has…………..solicited foreign investment.', 'importance, never', 'objective, wanted', 'view, discretely', 'need, actively', 4, 'grammar'),
(159, 'Fill in the blanks-\r\nIn his speech he vowed to…………..the four billion unbanked individuals across  the world into the…………..of financial inclusion.', 'represent, sphere', 'target, area', 'bring, realm', 'engage, achievement', 2, 'grammar'),
(160, 'Fill in the blanks-\r\nAlthough he puts in…………..of overtime and takes few holidays, he………… cannot support his family.', 'sufficient, however', 'much, thus', 'plenty, still', 'frequency, yet', 3, 'grammar'),
(161, 'Fill in the blanks-\r\nThey have been…………..on incentives to…………..these practices are implemented nat grass root level.', 'relying, ensure', 'improving, secure', 'advocating, confirm', 'focusing, display', 1, 'grammar'),
(162, 'Find synonym of the word-\r\nLuxuriant', ' Beautiful', 'Luxurious', 'Abundant', 'lovely', 3, 'grammar'),
(163, 'Find synonym of the word-\r\nIllegible', 'Fit', ' Illegal', 'not readable', 'elective', 3, 'grammar'),
(164, 'Find synonym of the word-\r\nImperious', 'Proud', 'Temper', 'Tamper', 'distant', 1, 'grammar'),
(165, 'Find synonym of the word-\r\nVocation', 'Holiday', 'Occupation', 'break-up', 'virtue', 2, 'grammar'),
(166, 'Find synonym of the word-\r\nOfficious', 'concerning office', 'legal', 'interfering', 'permissible', 3, 'grammar'),
(167, 'Point out the correct statement :', 'Hadoop do need specialized hardware to process the data', 'Hadoop 2.0 allows live stream processing of real time data', 'In Hadoop programming framework output files are divided in to lines or records', 'None of the mentioned', 2, 'hadoop'),
(168, 'According to analysts, for what can traditional IT systems provide a foundation when they\\’re integrated with big data technologies like Hadoop ?', 'Big data management and data mining', 'Data warehousing and business intelligence', 'Management of Hadoop clusters', 'Collecting and storing unstructured data', 1, 'hadoop'),
(169, 'Hadoop is a framework that works with a variety of related tools. Common cohorts include:', 'MapReduce, Hive and HBase', 'MapReduce, MySQL and Google Apps', 'MapReduce, Hummer and Iguana', 'MapReduce, Heron and Trumpet', 1, 'hadoop'),
(170, 'Point out the wrong statement :', 'Hardtop\\’s processing capabilities are huge and its real advantage lies in the ability to process terabytes & petabytes of data', 'Hadoop uses a programming model called \\“MapReduce\\”, all the programs should confirms to this model in order to work on Hadoop platform', 'The programming model, MapReduce, used by Hadoop is difficult to write and test', 'All of the mentioned', 3, 'hadoop'),
(171, 'What was Hadoop named after?', 'Creator Doug Cutting\\’s favorite circus act', 'Cutting\\’s high school rock band', 'The toy elephant of Cutting\\’s son', 'A sound Cutting\\’s laptop made during Hadoop\\’s development', 3, 'hadoop'),
(172, 'All of the following accurately describe Hadoop, EXCEPT:', 'Open source', 'Real-time', 'Java-based', 'Distributed computing approach', 1, 'hadoop'),
(173, '__________ can best be described as a programming model used to develop Hadoop-based applications that can process massive amounts of data.', 'MapReduce', 'Mahout', 'Oozie', 'All of the mentioned', 1, 'hadoop'),
(174, '__________ has the world\\’s largest Hadoop cluster.', 'Apple', 'Datamatics', 'Facebook', 'None of the mentioned', 3, 'hadoop'),
(175, 'Facebook Tackles Big Data With _______ based on Hadoop.', 'Project Prism', 'Prism', 'Project Big', 'Project Data', 1, 'hadoop'),
(176, 'A ________ serves as the master and there is only one NameNode per cluster', 'Data Node', 'NameNode', 'Data block', 'Replication', 2, 'hadoop'),
(177, 'Point out the correct statement :', 'DataNode is the slave/worker node and holds the user data in the form of Data Blocks', 'Each incoming file is broken into 32 MB by default', 'Data blocks are replicated across different nodes in the cluster to ensure a low degree of fault tolerance', 'None of the mentioned', 1, 'hadoop'),
(178, 'HDFS works in a __________ fashion.', 'master-worker', 'master-slave', 'worker/slave', 'all of the mentioned', 1, 'hadoop'),
(179, '________ NameNode is used when the Primary NameNode goes down.', 'Rack', 'Data', 'Secondary', 'None of the mentioned', 3, 'hadoop'),
(180, 'Point out the wrong statement :', 'Replication Factor can be configured at a cluster level (Default is set to 3) and also at a file level', 'Block Report from each DataNode contains a list of all the blocks that are stored on that DataNode', 'User data is stored on the local file system of DataNodes', 'DataNode is aware of the files to which the blocks stored on it belong to', 4, 'hadoop'),
(181, 'Which of the following scenario may not be a good fit for HDFS ?', 'HDFS is not suitable for scenarios requiring multiple/simultaneous writes to the same file', 'HDFS is suitable for storing data related to applications requiring low latency data access', 'HDFS is suitable for storing data related to applications requiring low latency data access', 'None of the mentioned', 1, 'hadoop'),
(182, 'The need for data replication can arise in various scenarios like :', 'Replication Factor is changed', 'DataNode goes down', 'Data Blocks get corrupted', 'All of the mentioned', 4, 'hadoop'),
(183, '________ is the slave/worker node and holds the user data in the form of Data Blocks.', ' DataNode', 'NameNode', 'Data block', ' Replication', 1, 'hadoop'),
(184, 'HDFS provides a command line interface called __________ used to interact with HDFS.', 'HDFS Shell', 'FS Shell', 'DFS Shell', 'None of the mentioned', 2, 'hadoop'),
(185, 'HDFS is implemented in _____________ programming language.', 'C++', 'Java', 'Scala', 'None of the mentioned', 2, 'hadoop'),
(186, 'Hadoop I/O Hadoop comes with a set of ________ for data I/O.', 'methods', 'commands', 'classes', 'none of the mentioned', 4, 'hadoop'),
(187, 'Point out the correct statement :', 'The sequence file also can contain a \\“secondary\\” key-value list that can be used as file Metadata', 'SequenceFile formats share a header that contains some information which allows the reader to recognize is format', 'There\\’re Key and Value Class Name\\’s that allow the reader to instantiate those classes, via reflection, for reading', 'All of the mentioned', 4, 'hadoop'),
(188, 'Apache Hadoop\\’s ___________ provides a persistent data structure for binary key-value pairs.', 'GetFile', 'SequenceFile', 'Putfile', 'All of the mentioned', 2, 'hadoop'),
(189, 'How many formats of SequenceFile are present in Hadoop I/O ?', '2', '3', '4', '5', 2, 'hadoop'),
(190, ' Point out the wrong statement :', 'The data file contains all the key, value records but key N + 1 must be greater then or equal to the key N', 'Sequence file is a kind of hadoop file based data structure', 'Map file type is splittable as it contains a sync point after several records', 'None of the mentioned', 3, 'hadoop'),
(191, 'Which of the following format is more compression-aggressive ?', 'Partition Compressed', 'Record Compressed', 'Block-Compressed', 'Uncompressed', 3, 'hadoop'),
(192, 'The __________ is a directory that contains two SequenceFile.', 'ReduceFile', 'MapperFile', 'MapFile', 'None of the mentioned', 3, 'hadoop'),
(193, 'The ______ file is populated with the key and a LongWritable that contains the starting byte position of the record.', 'Array', 'Index', 'Immutable', 'All of the mentioned', 2, 'hadoop'),
(194, 'The _________ as just the value field append(value) and the key is a LongWritable that contains the record number, count + 1', 'SetFile', 'ArrayFile', 'BloomMapFile', 'None of the mentioned', 2, 'hadoop'),
(195, '____________ data file takes is based on avroserializaton framework which was primarily created for hadoop.', 'Oozie', 'Avro', 'cTakes', 'Lucene', 2, 'hadoop'),
(196, 'Which of the following command sets the value of a particular configuration variable (key) ?', 'set -v', 'set <key>=<value>', 'set', 'reset', 2, 'hadoop'),
(197, 'Point out the correct statement :', 'Hive Commands are non-SQL statement such as setting a property or adding a resource', 'Set -v prints a list of configuration variables that are overridden by the user or Hive', 'Set sets a list of variables that are overridden by the user or Hive', 'None of the mentioned', 1, 'hadoop'),
(198, 'Which of the following operator executes a shell command from the Hive shell ?', ' |', ' !', ' ^', ' +', 2, 'hadoop'),
(199, 'Which of the following will remove the resource(s) from the distributed cache ?', 'delete FILE[S] <filepath>*', 'delete JAR[S] <filepath>*', 'delete ARCHIVE[S] <filepath>*', 'all of the mentioned', 4, 'hadoop'),
(200, 'Point out the wrong statement :', 'source FILE executes a script file inside the CLI', 'bfs executes a dfs command from the Hive shell', 'hive is Query lanaguage similar to SQL', 'none of the mentioned', 2, 'hadoop'),
(201, '_________ is a shell utility which can be used to run Hive queries in either interactive or batch mode.', '$HIVE/bin/hive', '$HIVE_HOME/hive', '$HIVE_HOME/bin/hive', 'All of the mentioned', 3, 'hadoop'),
(202, 'Which of the following is a command line option ?', '-d,–define <key=value>', '-e,–define <key=value>', '-f,–define <key=value>', 'None of the mentioned', 1, 'hadoop'),
(203, 'The _________ codec from Google provides modest compression ratios.', 'Snapcheck\r\n', 'Snappy', 'FileCompress', 'None of the mentioned', 2, 'hadoop'),
(204, 'Point out the correct statement :', 'Snappy is licensed under the GNU Public License (GPL)', 'BgCIK needs to create an index when it compresses a file', 'The Snappy codec is integrated into Hadoop Common, a set of common utilities that supports other Hadoop subprojects', 'None of the mentioned', 3, 'hadoop'),
(205, 'Which of the following compression is similar to Snappy compression ?', 'LZO\r\n', 'Bzip2', 'Gzip', 'All of the mentioned', 1, 'hadoop'),
(206, 'Gzip (short for GNU zip) generates compressed files that have a _________ extension.', '.gzip', '.gz', '.gzp', '.g', 2, 'hadoop'),
(207, 'The HDFS client software implements __________ checking on the contents of HDFS files.\r\n', 'metastore', 'parity', 'checksum', 'none of the mentioned', 3, 'hadoop'),
(208, 'Point out the correct statement :', 'The HDFS architecture is compatible with data rebalancing schemes', 'Datablocks support storing a copy of data at a particular instant of time', 'HDFS currently support snapshots', 'None of the mentioned', 1, 'hadoop'),
(209, 'The ____________ and the EditLog are central data structures of HDFS.', 'DsImage', 'FsImage', 'FsImages', 'All of the mentioned', 2, 'hadoop'),
(210, ' Automatic restart and ____________ of the NameNode software to another machine is not supported.', ' failover', ' end', ' scalability\r\n', ' all of the mentioned', 1, 'hadoop');

-- --------------------------------------------------------

--
-- Table structure for table `abhi_result`
--

CREATE TABLE `abhi_result` (
  `id` int(11) NOT NULL,
  `test_number` text,
  `test_date` datetime DEFAULT NULL,
  `score` int(3) DEFAULT NULL,
  `stud_name` varchar(250) DEFAULT NULL,
  `stud_email` varchar(250) NOT NULL,
  `test_subject` varchar(50) DEFAULT NULL,
  `domain` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abhi_useranswer`
--

CREATE TABLE `abhi_useranswer` (
  `id` int(11) NOT NULL,
  `test_number` text,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `que_des` varchar(250) DEFAULT NULL,
  `ans1` varchar(250) DEFAULT NULL,
  `ans2` varchar(250) DEFAULT NULL,
  `ans3` varchar(250) DEFAULT NULL,
  `ans4` varchar(250) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL,
  `stud_name` varchar(250) DEFAULT NULL,
  `stud_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_status`
--

CREATE TABLE `exam_status` (
  `id` int(11) NOT NULL,
  `cookie` varchar(250) DEFAULT NULL,
  `start_time` bigint(20) NOT NULL DEFAULT '0',
  `last_time` bigint(20) NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tid` text NOT NULL,
  `sdomain` varchar(20) NOT NULL,
  `domain` varchar(250) NOT NULL,
  `qsnnumber` int(11) NOT NULL DEFAULT '1',
  `trueans` int(11) NOT NULL DEFAULT '0',
  `naAnswer` int(11) NOT NULL DEFAULT '0',
  `r1` int(11) NOT NULL DEFAULT '2',
  `r2` int(11) NOT NULL DEFAULT '2',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mail` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_login`
--

CREATE TABLE `stud_login` (
  `id` int(11) NOT NULL,
  `stud_id` text,
  `exam_date` text,
  `exam_start_t` text,
  `exam_duration` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `used` int(1) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `mname` text,
  `lname` text,
  `email` varchar(250) DEFAULT NULL,
  `u_mail` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `state` text,
  `city` text,
  `domain` varchar(20) DEFAULT NULL,
  `subdomain` varchar(20) NOT NULL,
  `expYear` varchar(20) NOT NULL,
  `expMonth` varchar(20) NOT NULL,
  `lastorganisation` varchar(30) NOT NULL,
  `certification` varchar(30) NOT NULL,
  `heard` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `timeOfReg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verifymail`
--

CREATE TABLE `verifymail` (
  `id` int(11) NOT NULL,
  `token` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `used` int(1) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abhi_question`
--
ALTER TABLE `abhi_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `abhi_result`
--
ALTER TABLE `abhi_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abhi_useranswer`
--
ALTER TABLE `abhi_useranswer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_status`
--
ALTER TABLE `exam_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_login`
--
ALTER TABLE `stud_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `verifymail`
--
ALTER TABLE `verifymail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abhi_question`
--
ALTER TABLE `abhi_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `abhi_result`
--
ALTER TABLE `abhi_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abhi_useranswer`
--
ALTER TABLE `abhi_useranswer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_status`
--
ALTER TABLE `exam_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `stud_login`
--
ALTER TABLE `stud_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verifymail`
--
ALTER TABLE `verifymail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
