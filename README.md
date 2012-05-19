# Sinatrium

A Lithium micro framework.

## Usage

Add routes with closures.

```
Router::connect('/', array(), function($request) {
	$body = '<h1>Welcome to Sinatrium</h1>';
	return new Response(compact('body'));
});
```

