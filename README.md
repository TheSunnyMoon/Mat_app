
```
Mat_App
├─ .env
├─ Backend
│  ├─ .env
│  ├─ Dockerfile
│  ├─ apache
│  │  └─ default.conf
│  ├─ composer.json
│  ├─ composer.lock
│  ├─ docs
│  │  └─ swagger.yaml
│  ├─ index.php
│  ├─ public
│  ├─ src
│  │  ├─ Controllers.php
│  │  ├─ database.php
│  │  └─ routes.php
│  ├─ test.txt
│  └─ vendor
│     ├─ autoload.php
│     ├─ composer
│     │  ├─ 
│     ├─ 

│     ├─ slim
│     │  ├─ psr7
│     │  │  ├─ LICENSE.md
│     │  │  ├─ composer.json
│     │  │  ├─ phpunit.xml.dist
│     │  │  ├─ src
│     │  │  │  ├─ Cookies.php
│     │  │  │  ├─ Environment.php
│     │  │  │  ├─ Factory
│     │  │  │  │  ├─ RequestFactory.php
│     │  │  │  │  ├─ ResponseFactory.php
│     │  │  │  │  ├─ ServerRequestFactory.php
│     │  │  │  │  ├─ StreamFactory.php
│     │  │  │  │  ├─ UploadedFileFactory.php
│     │  │  │  │  └─ UriFactory.php
│     │  │  │  ├─ Header.php
│     │  │  │  ├─ Headers.php
│     │  │  │  ├─ Interfaces
│     │  │  │  │  └─ HeadersInterface.php
│     │  │  │  ├─ Message.php
│     │  │  │  ├─ NonBufferedBody.php
│     │  │  │  ├─ Request.php
│     │  │  │  ├─ Response.php
│     │  │  │  ├─ Stream.php
│     │  │  │  ├─ UploadedFile.php
│     │  │  │  └─ Uri.php
│     │  │  └─ tests
│     │  │     ├─ Assets
│     │  │     │  └─ HeaderStack.php
│     │  │     ├─ BodyTest.php
│     │  │     ├─ CookiesTest.php
│     │  │     ├─ EnvironmentTest.php
│     │  │     ├─ Factory
│     │  │     │  ├─ RequestFactoryTest.php
│     │  │     │  ├─ ResponseFactoryTest.php
│     │  │     │  ├─ ServerRequestFactoryTest.php
│     │  │     │  ├─ StreamFactoryTest.php
│     │  │     │  ├─ UploadedFileFactoryTest.php
│     │  │     │  └─ UriFactoryTest.php
│     │  │     ├─ HeaderTest.php
│     │  │     ├─ HeadersTest.php
│     │  │     ├─ Integration
│     │  │     │  ├─ BaseTestFactories.php
│     │  │     │  ├─ RequestTest.php
│     │  │     │  ├─ ResponseTest.php
│     │  │     │  ├─ ServerRequestTest.php
│     │  │     │  ├─ StreamTest.php
│     │  │     │  ├─ UploadedFileTest.php
│     │  │     │  └─ UriTest.php
│     │  │     ├─ MessageTest.php
│     │  │     ├─ Mocks
│     │  │     │  └─ MessageStub.php
│     │  │     ├─ NonBufferedBodyTest.php
│     │  │     ├─ RequestTest.php
│     │  │     ├─ ResponseTest.php
│     │  │     ├─ StreamTest.php
│     │  │     ├─ UploadedFileTest.php
│     │  │     ├─ UriTest.php
│     │  │     └─ bootstrap.php
│     │  └─ slim
│     │     ├─ CHANGELOG.md
│     │     ├─ LICENSE.md
│     │     ├─ MAINTAINERS.md
│     │     ├─ SECURITY.md
│     │     ├─ Slim
│     │     │  ├─ App.php
│     │     │  ├─ CallableResolver.php
│     │     │  ├─ Error
│     │     │  │  ├─ AbstractErrorRenderer.php
│     │     │  │  └─ Renderers
│     │     │  │     ├─ HtmlErrorRenderer.php
│     │     │  │     ├─ JsonErrorRenderer.php
│     │     │  │     ├─ PlainTextErrorRenderer.php
│     │     │  │     └─ XmlErrorRenderer.php
│     │     │  ├─ Exception
│     │     │  │  ├─ HttpBadRequestException.php
│     │     │  │  ├─ HttpException.php
│     │     │  │  ├─ HttpForbiddenException.php
│     │     │  │  ├─ HttpGoneException.php
│     │     │  │  ├─ HttpInternalServerErrorException.php
│     │     │  │  ├─ HttpMethodNotAllowedException.php
│     │     │  │  ├─ HttpNotFoundException.php
│     │     │  │  ├─ HttpNotImplementedException.php
│     │     │  │  ├─ HttpSpecializedException.php
│     │     │  │  ├─ HttpTooManyRequestsException.php
│     │     │  │  └─ HttpUnauthorizedException.php
│     │     │  ├─ Factory
│     │     │  │  ├─ AppFactory.php
│     │     │  │  ├─ Psr17
│     │     │  │  │  ├─ GuzzlePsr17Factory.php
│     │     │  │  │  ├─ HttpSoftPsr17Factory.php
│     │     │  │  │  ├─ LaminasDiactorosPsr17Factory.php
│     │     │  │  │  ├─ NyholmPsr17Factory.php
│     │     │  │  │  ├─ Psr17Factory.php
│     │     │  │  │  ├─ Psr17FactoryProvider.php
│     │     │  │  │  ├─ ServerRequestCreator.php
│     │     │  │  │  ├─ SlimHttpPsr17Factory.php
│     │     │  │  │  ├─ SlimHttpServerRequestCreator.php
│     │     │  │  │  └─ SlimPsr17Factory.php
│     │     │  │  └─ ServerRequestCreatorFactory.php
│     │     │  ├─ Handlers
│     │     │  │  ├─ ErrorHandler.php
│     │     │  │  └─ Strategies
│     │     │  │     ├─ RequestHandler.php
│     │     │  │     ├─ RequestResponse.php
│     │     │  │     ├─ RequestResponseArgs.php
│     │     │  │     └─ RequestResponseNamedArgs.php
│     │     │  ├─ Interfaces
│     │     │  │  ├─ AdvancedCallableResolverInterface.php
│     │     │  │  ├─ CallableResolverInterface.php
│     │     │  │  ├─ DispatcherInterface.php
│     │     │  │  ├─ ErrorHandlerInterface.php
│     │     │  │  ├─ ErrorRendererInterface.php
│     │     │  │  ├─ InvocationStrategyInterface.php
│     │     │  │  ├─ MiddlewareDispatcherInterface.php
│     │     │  │  ├─ Psr17FactoryInterface.php
│     │     │  │  ├─ Psr17FactoryProviderInterface.php
│     │     │  │  ├─ RequestHandlerInvocationStrategyInterface.php
│     │     │  │  ├─ RouteCollectorInterface.php
│     │     │  │  ├─ RouteCollectorProxyInterface.php
│     │     │  │  ├─ RouteGroupInterface.php
│     │     │  │  ├─ RouteInterface.php
│     │     │  │  ├─ RouteParserInterface.php
│     │     │  │  ├─ RouteResolverInterface.php
│     │     │  │  └─ ServerRequestCreatorInterface.php
│     │     │  ├─ Logger.php
│     │     │  ├─ Middleware
│     │     │  │  ├─ BodyParsingMiddleware.php
│     │     │  │  ├─ ContentLengthMiddleware.php
│     │     │  │  ├─ ErrorMiddleware.php
│     │     │  │  ├─ MethodOverrideMiddleware.php
│     │     │  │  ├─ OutputBufferingMiddleware.php
│     │     │  │  └─ RoutingMiddleware.php
│     │     │  ├─ MiddlewareDispatcher.php
│     │     │  ├─ ResponseEmitter.php
│     │     │  └─ Routing
│     │     │     ├─ Dispatcher.php
│     │     │     ├─ FastRouteDispatcher.php
│     │     │     ├─ Route.php
│     │     │     ├─ RouteCollector.php
│     │     │     ├─ RouteCollectorProxy.php
│     │     │     ├─ RouteContext.php
│     │     │     ├─ RouteGroup.php
│     │     │     ├─ RouteParser.php
│     │     │     ├─ RouteResolver.php
│     │     │     ├─ RouteRunner.php
│     │     │     └─ RoutingResults.php
│     │     ├─ composer.json
│     │     └─ psalm.xml
│     ├
├─ Docker-compose.yml
├─ Frontend
│  ├─ Dockerfile
│  ├─ css
│  │  └─ Index.css
│  ├─ default.conf
│  ├─ index.html
│  ├─ js
│  │  └─ Index.js
│  ├─ nginx
│  ├─ nginx.conf
│  ├─ pages
│  └─ stream.conf
├─ Proxy
├─ README.md
└─ database
   ├─ Dockerfile
   └─ schema.sql

```
```
Mat_App
├─ .env
├─ Backend
│  ├─ .env
│  ├─ Dockerfile
│  ├─ apache
│  │  └─ default.conf
│  ├─ composer.json
│  ├─ composer.lock
│  ├─ docs
│  │  └─ swagger.yaml
│  ├─ index1.php
│  ├─ public
│  │  └─ index.php
│  ├─ src
│  │  ├─ Controller.php
│  │  ├─ database.php
│  │  └─ routes.php
│  └─ vendor
│     ├─ autoload.php
│     ├─ composer
│     │  ├─ ClassLoader.php
│     │  ├─ InstalledVersions.php
│     │  ├─ LICENSE
│     │  ├─ autoload_classmap.php
│     │  ├─ autoload_files.php
│     │  ├─ autoload_namespaces.php
│     │  ├─ autoload_psr4.php
│     │  ├─ autoload_real.php
│     │  ├─ autoload_static.php
│     │  ├─ installed.json
│     │  ├─ installed.php
│     │  └─ platform_check.php
│     ├─ fig
│     │  └─ http-message-util
│     │     ├─ CHANGELOG.md
│     │     ├─ LICENSE
│     │     ├─ README.md
│     │     ├─ composer.json
│     │     └─ src
│     │        ├─ RequestMethodInterface.php
│     │        └─ StatusCodeInterface.php
│     ├─ firebase
│     │  └─ php-jwt
│     │     ├─ CHANGELOG.md
│     │     ├─ LICENSE
│     │     ├─ README.md
│     │     ├─ composer.json
│     │     └─ src
│     │        ├─ BeforeValidException.php
│     │        ├─ CachedKeySet.php
│     │        ├─ ExpiredException.php
│     │        ├─ JWK.php
│     │        ├─ JWT.php
│     │        ├─ JWTExceptionWithPayloadInterface.php
│     │        ├─ Key.php
│     │        └─ SignatureInvalidException.php
│     ├─ graham-campbell
│     │  └─ result-type
│     │     ├─ LICENSE
│     │     ├─ composer.json
│     │     └─ src
│     │        ├─ Error.php
│     │        ├─ Result.php
│     │        └─ Success.php
│     ├─ nikic
│     │  └─ fast-route
│     │     ├─ .hhconfig
│     │     ├─ .travis.yml
│     │     ├─ FastRoute.hhi
│     │     ├─ LICENSE
│     │     ├─ README.md
│     │     ├─ composer.json
│     │     ├─ phpunit.xml
│     │     ├─ psalm.xml
│     │     ├─ src
│     │     │  ├─ BadRouteException.php
│     │     │  ├─ DataGenerator
│     │     │  │  ├─ CharCountBased.php
│     │     │  │  ├─ GroupCountBased.php
│     │     │  │  ├─ GroupPosBased.php
│     │     │  │  ├─ MarkBased.php
│     │     │  │  └─ RegexBasedAbstract.php
│     │     │  ├─ DataGenerator.php
│     │     │  ├─ Dispatcher
│     │     │  │  ├─ CharCountBased.php
│     │     │  │  ├─ GroupCountBased.php
│     │     │  │  ├─ GroupPosBased.php
│     │     │  │  ├─ MarkBased.php
│     │     │  │  └─ RegexBasedAbstract.php
│     │     │  ├─ Dispatcher.php
│     │     │  ├─ Route.php
│     │     │  ├─ RouteCollector.php
│     │     │  ├─ RouteParser
│     │     │  │  └─ Std.php
│     │     │  ├─ RouteParser.php
│     │     │  ├─ bootstrap.php
│     │     │  └─ functions.php
│     │     └─ test
│     │        ├─ Dispatcher
│     │        │  ├─ CharCountBasedTest.php
│     │        │  ├─ DispatcherTest.php
│     │        │  ├─ GroupCountBasedTest.php
│     │        │  ├─ GroupPosBasedTest.php
│     │        │  └─ MarkBasedTest.php
│     │        ├─ HackTypechecker
│     │        │  ├─ HackTypecheckerTest.php
│     │        │  └─ fixtures
│     │        │     ├─ all_options.php
│     │        │     ├─ empty_options.php
│     │        │     └─ no_options.php
│     │        ├─ RouteCollectorTest.php
│     │        ├─ RouteParser
│     │        │  └─ StdTest.php
│     │        └─ bootstrap.php
│     ├─ phpoption
│     │  └─ phpoption
│     │     ├─ LICENSE
│     │     ├─ composer.json
│     │     └─ src
│     │        └─ PhpOption
│     │           ├─ LazyOption.php
│     │           ├─ None.php
│     │           ├─ Option.php
│     │           └─ Some.php
│     ├─ psr
│     │  ├─ container
│     │  │  ├─ LICENSE
│     │  │  ├─ README.md
│     │  │  ├─ composer.json
│     │  │  └─ src
│     │  │     ├─ ContainerExceptionInterface.php
│     │  │     ├─ ContainerInterface.php
│     │  │     └─ NotFoundExceptionInterface.php
│     │  ├─ http-factory
│     │  │  ├─ LICENSE
│     │  │  ├─ README.md
│     │  │  ├─ composer.json
│     │  │  └─ src
│     │  │     ├─ RequestFactoryInterface.php
│     │  │     ├─ ResponseFactoryInterface.php
│     │  │     ├─ ServerRequestFactoryInterface.php
│     │  │     ├─ StreamFactoryInterface.php
│     │  │     ├─ UploadedFileFactoryInterface.php
│     │  │     └─ UriFactoryInterface.php
│     │  ├─ http-message
│     │  │  ├─ CHANGELOG.md
│     │  │  ├─ LICENSE
│     │  │  ├─ README.md
│     │  │  ├─ composer.json
│     │  │  ├─ docs
│     │  │  │  ├─ PSR7-Interfaces.md
│     │  │  │  └─ PSR7-Usage.md
│     │  │  └─ src
│     │  │     ├─ MessageInterface.php
│     │  │     ├─ RequestInterface.php
│     │  │     ├─ ResponseInterface.php
│     │  │     ├─ ServerRequestInterface.php
│     │  │     ├─ StreamInterface.php
│     │  │     ├─ UploadedFileInterface.php
│     │  │     └─ UriInterface.php
│     │  ├─ http-server-handler
│     │  │  ├─ LICENSE
│     │  │  ├─ README.md
│     │  │  ├─ composer.json
│     │  │  └─ src
│     │  │     └─ RequestHandlerInterface.php
│     │  ├─ http-server-middleware
│     │  │  ├─ LICENSE
│     │  │  ├─ README.md
│     │  │  ├─ composer.json
│     │  │  └─ src
│     │  │     └─ MiddlewareInterface.php
│     │  └─ log
│     │     ├─ LICENSE
│     │     ├─ README.md
│     │     ├─ composer.json
│     │     └─ src
│     │        ├─ AbstractLogger.php
│     │        ├─ InvalidArgumentException.php
│     │        ├─ LogLevel.php
│     │        ├─ LoggerAwareInterface.php
│     │        ├─ LoggerAwareTrait.php
│     │        ├─ LoggerInterface.php
│     │        ├─ LoggerTrait.php
│     │        └─ NullLogger.php
│     ├─ ralouphie
│     │  └─ getallheaders
│     │     ├─ LICENSE
│     │     ├─ README.md
│     │     ├─ composer.json
│     │     └─ src
│     │        └─ getallheaders.php
│     ├─ slim
│     │  ├─ psr7
│     │  │  ├─ LICENSE.md
│     │  │  ├─ composer.json
│     │  │  ├─ phpunit.xml.dist
│     │  │  ├─ src
│     │  │  │  ├─ Cookies.php
│     │  │  │  ├─ Environment.php
│     │  │  │  ├─ Factory
│     │  │  │  │  ├─ RequestFactory.php
│     │  │  │  │  ├─ ResponseFactory.php
│     │  │  │  │  ├─ ServerRequestFactory.php
│     │  │  │  │  ├─ StreamFactory.php
│     │  │  │  │  ├─ UploadedFileFactory.php
│     │  │  │  │  └─ UriFactory.php
│     │  │  │  ├─ Header.php
│     │  │  │  ├─ Headers.php
│     │  │  │  ├─ Interfaces
│     │  │  │  │  └─ HeadersInterface.php
│     │  │  │  ├─ Message.php
│     │  │  │  ├─ NonBufferedBody.php
│     │  │  │  ├─ Request.php
│     │  │  │  ├─ Response.php
│     │  │  │  ├─ Stream.php
│     │  │  │  ├─ UploadedFile.php
│     │  │  │  └─ Uri.php
│     │  │  └─ tests
│     │  │     ├─ Assets
│     │  │     │  └─ HeaderStack.php
│     │  │     ├─ BodyTest.php
│     │  │     ├─ CookiesTest.php
│     │  │     ├─ EnvironmentTest.php
│     │  │     ├─ Factory
│     │  │     │  ├─ RequestFactoryTest.php
│     │  │     │  ├─ ResponseFactoryTest.php
│     │  │     │  ├─ ServerRequestFactoryTest.php
│     │  │     │  ├─ StreamFactoryTest.php
│     │  │     │  ├─ UploadedFileFactoryTest.php
│     │  │     │  └─ UriFactoryTest.php
│     │  │     ├─ HeaderTest.php
│     │  │     ├─ HeadersTest.php
│     │  │     ├─ Integration
│     │  │     │  ├─ BaseTestFactories.php
│     │  │     │  ├─ RequestTest.php
│     │  │     │  ├─ ResponseTest.php
│     │  │     │  ├─ ServerRequestTest.php
│     │  │     │  ├─ StreamTest.php
│     │  │     │  ├─ UploadedFileTest.php
│     │  │     │  └─ UriTest.php
│     │  │     ├─ MessageTest.php
│     │  │     ├─ Mocks
│     │  │     │  └─ MessageStub.php
│     │  │     ├─ NonBufferedBodyTest.php
│     │  │     ├─ RequestTest.php
│     │  │     ├─ ResponseTest.php
│     │  │     ├─ StreamTest.php
│     │  │     ├─ UploadedFileTest.php
│     │  │     ├─ UriTest.php
│     │  │     └─ bootstrap.php
│     │  └─ slim
│     │     ├─ CHANGELOG.md
│     │     ├─ LICENSE.md
│     │     ├─ MAINTAINERS.md
│     │     ├─ SECURITY.md
│     │     ├─ Slim
│     │     │  ├─ App.php
│     │     │  ├─ CallableResolver.php
│     │     │  ├─ Error
│     │     │  │  ├─ AbstractErrorRenderer.php
│     │     │  │  └─ Renderers
│     │     │  │     ├─ HtmlErrorRenderer.php
│     │     │  │     ├─ JsonErrorRenderer.php
│     │     │  │     ├─ PlainTextErrorRenderer.php
│     │     │  │     └─ XmlErrorRenderer.php
│     │     │  ├─ Exception
│     │     │  │  ├─ HttpBadRequestException.php
│     │     │  │  ├─ HttpException.php
│     │     │  │  ├─ HttpForbiddenException.php
│     │     │  │  ├─ HttpGoneException.php
│     │     │  │  ├─ HttpInternalServerErrorException.php
│     │     │  │  ├─ HttpMethodNotAllowedException.php
│     │     │  │  ├─ HttpNotFoundException.php
│     │     │  │  ├─ HttpNotImplementedException.php
│     │     │  │  ├─ HttpSpecializedException.php
│     │     │  │  ├─ HttpTooManyRequestsException.php
│     │     │  │  └─ HttpUnauthorizedException.php
│     │     │  ├─ Factory
│     │     │  │  ├─ AppFactory.php
│     │     │  │  ├─ Psr17
│     │     │  │  │  ├─ GuzzlePsr17Factory.php
│     │     │  │  │  ├─ HttpSoftPsr17Factory.php
│     │     │  │  │  ├─ LaminasDiactorosPsr17Factory.php
│     │     │  │  │  ├─ NyholmPsr17Factory.php
│     │     │  │  │  ├─ Psr17Factory.php
│     │     │  │  │  ├─ Psr17FactoryProvider.php
│     │     │  │  │  ├─ ServerRequestCreator.php
│     │     │  │  │  ├─ SlimHttpPsr17Factory.php
│     │     │  │  │  ├─ SlimHttpServerRequestCreator.php
│     │     │  │  │  └─ SlimPsr17Factory.php
│     │     │  │  └─ ServerRequestCreatorFactory.php
│     │     │  ├─ Handlers
│     │     │  │  ├─ ErrorHandler.php
│     │     │  │  └─ Strategies
│     │     │  │     ├─ RequestHandler.php
│     │     │  │     ├─ RequestResponse.php
│     │     │  │     ├─ RequestResponseArgs.php
│     │     │  │     └─ RequestResponseNamedArgs.php
│     │     │  ├─ Interfaces
│     │     │  │  ├─ AdvancedCallableResolverInterface.php
│     │     │  │  ├─ CallableResolverInterface.php
│     │     │  │  ├─ DispatcherInterface.php
│     │     │  │  ├─ ErrorHandlerInterface.php
│     │     │  │  ├─ ErrorRendererInterface.php
│     │     │  │  ├─ InvocationStrategyInterface.php
│     │     │  │  ├─ MiddlewareDispatcherInterface.php
│     │     │  │  ├─ Psr17FactoryInterface.php
│     │     │  │  ├─ Psr17FactoryProviderInterface.php
│     │     │  │  ├─ RequestHandlerInvocationStrategyInterface.php
│     │     │  │  ├─ RouteCollectorInterface.php
│     │     │  │  ├─ RouteCollectorProxyInterface.php
│     │     │  │  ├─ RouteGroupInterface.php
│     │     │  │  ├─ RouteInterface.php
│     │     │  │  ├─ RouteParserInterface.php
│     │     │  │  ├─ RouteResolverInterface.php
│     │     │  │  └─ ServerRequestCreatorInterface.php
│     │     │  ├─ Logger.php
│     │     │  ├─ Middleware
│     │     │  │  ├─ BodyParsingMiddleware.php
│     │     │  │  ├─ ContentLengthMiddleware.php
│     │     │  │  ├─ ErrorMiddleware.php
│     │     │  │  ├─ MethodOverrideMiddleware.php
│     │     │  │  ├─ OutputBufferingMiddleware.php
│     │     │  │  └─ RoutingMiddleware.php
│     │     │  ├─ MiddlewareDispatcher.php
│     │     │  ├─ ResponseEmitter.php
│     │     │  └─ Routing
│     │     │     ├─ Dispatcher.php
│     │     │     ├─ FastRouteDispatcher.php
│     │     │     ├─ Route.php
│     │     │     ├─ RouteCollector.php
│     │     │     ├─ RouteCollectorProxy.php
│     │     │     ├─ RouteContext.php
│     │     │     ├─ RouteGroup.php
│     │     │     ├─ RouteParser.php
│     │     │     ├─ RouteResolver.php
│     │     │     ├─ RouteRunner.php
│     │     │     └─ RoutingResults.php
│     │     ├─ composer.json
│     │     └─ psalm.xml
│     ├─ symfony
│     │  ├─ polyfill-ctype
│     │  │  ├─ Ctype.php
│     │  │  ├─ LICENSE
│     │  │  ├─ README.md
│     │  │  ├─ bootstrap.php
│     │  │  ├─ bootstrap80.php
│     │  │  └─ composer.json
│     │  ├─ polyfill-mbstring
│     │  │  ├─ LICENSE
│     │  │  ├─ Mbstring.php
│     │  │  ├─ README.md
│     │  │  ├─ Resources
│     │  │  │  └─ unidata
│     │  │  │     ├─ caseFolding.php
│     │  │  │     ├─ lowerCase.php
│     │  │  │     ├─ titleCaseRegexp.php
│     │  │  │     └─ upperCase.php
│     │  │  ├─ bootstrap.php
│     │  │  ├─ bootstrap80.php
│     │  │  └─ composer.json
│     │  └─ polyfill-php80
│     │     ├─ LICENSE
│     │     ├─ Php80.php
│     │     ├─ PhpToken.php
│     │     ├─ README.md
│     │     ├─ Resources
│     │     │  └─ stubs
│     │     │     ├─ Attribute.php
│     │     │     ├─ PhpToken.php
│     │     │     ├─ Stringable.php
│     │     │     ├─ UnhandledMatchError.php
│     │     │     └─ ValueError.php
│     │     ├─ bootstrap.php
│     │     └─ composer.json
│     └─ vlucas
│        └─ phpdotenv
│           ├─ LICENSE
│           ├─ composer.json
│           └─ src
│              ├─ Dotenv.php
│              ├─ Exception
│              │  ├─ ExceptionInterface.php
│              │  ├─ InvalidEncodingException.php
│              │  ├─ InvalidFileException.php
│              │  ├─ InvalidPathException.php
│              │  └─ ValidationException.php
│              ├─ Loader
│              │  ├─ Loader.php
│              │  ├─ LoaderInterface.php
│              │  └─ Resolver.php
│              ├─ Parser
│              │  ├─ Entry.php
│              │  ├─ EntryParser.php
│              │  ├─ Lexer.php
│              │  ├─ Lines.php
│              │  ├─ Parser.php
│              │  ├─ ParserInterface.php
│              │  └─ Value.php
│              ├─ Repository
│              │  ├─ Adapter
│              │  │  ├─ AdapterInterface.php
│              │  │  ├─ ApacheAdapter.php
│              │  │  ├─ ArrayAdapter.php
│              │  │  ├─ EnvConstAdapter.php
│              │  │  ├─ GuardedWriter.php
│              │  │  ├─ ImmutableWriter.php
│              │  │  ├─ MultiReader.php
│              │  │  ├─ MultiWriter.php
│              │  │  ├─ PutenvAdapter.php
│              │  │  ├─ ReaderInterface.php
│              │  │  ├─ ReplacingWriter.php
│              │  │  ├─ ServerConstAdapter.php
│              │  │  └─ WriterInterface.php
│              │  ├─ AdapterRepository.php
│              │  ├─ RepositoryBuilder.php
│              │  └─ RepositoryInterface.php
│              ├─ Store
│              │  ├─ File
│              │  │  ├─ Paths.php
│              │  │  └─ Reader.php
│              │  ├─ FileStore.php
│              │  ├─ StoreBuilder.php
│              │  ├─ StoreInterface.php
│              │  └─ StringStore.php
│              ├─ Util
│              │  ├─ Regex.php
│              │  └─ Str.php
│              └─ Validator.php
├─ Docker-compose.yml
├─ Frontend
│  ├─ Dockerfile
│  ├─ css
│  │  └─ Index.css
│  ├─ default.conf
│  ├─ index.html
│  ├─ js
│  │  └─ Index.js
│  ├─ nginx
│  ├─ nginx.conf
│  ├─ pages
│  └─ stream.conf
├─ Proxy
├─ README.md
└─ database
   ├─ Dockerfile
   └─ schema.sql

```