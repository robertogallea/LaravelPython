## LaravelPython

Execute Python scripts inside your Laravel Application.

### Installation

`composer require robertogallea/laravel-python`

### Configuration
To edit the default package configuration, publish the config resource with the command

`php artisan vendor:publish --provider="robertogallea\LaravelPython\ServiceProvider" --tag=config`

then edit `config/laravel-python.php`

### Usage

You can run commands in several ways:

1. Instantiating `LaravelPython` service:
```
use robertogallea\LaravelPython\Services\LaravelPython;
...

$service = new LaravelPython();
$result = $service->run('/path/to/script.py'):
$parameters = array('par1', 'par2'):
$result = $service->run('/path/to/script.py', $parameters):
```

2. Injecting from the ServiceContainer
```
use robertogallea\LaravelPython\Services\LaravelPython;
...
public function __construct(LaravelPython $service)
{
  $result = $service->run('/path/to/script.py')
  $parameters = array('par1', 'par2'):
  $result = $service->run('/path/to/script.py', $parameters):
}
```

3. Using the `Python` facade
```
$result = \Python::run('/path/to/script.py')
$parameters = array('par1', 'par2'):
$result = \Python::run'/path/to/script.py', $parameters):
```

4. Via command line with an artisan command
```
php artisan python:run /path/to/script.py "Some parameter"
```
Note that you can use an arbitrary number of parameters

### Issues, Questions and Pull Requests
You can report issues and ask questions in the [issues section](https://github.com/robertogallea/LaravelPython/issues). Please start your issue with ISSUE: and your question with QUESTION:

If you have a question, check the closed issues first. Over time, I've been able to answer quite a few.

To submit a Pull Request, please fork this repository, create a new branch and commit your new/updated code in there. Then open a Pull Request from your new branch. Refer to [this guide](https://help.github.com/articles/about-pull-requests/) for more info.