# phpstan-poc

```
composer install
vendor/bin/phpstan analyse src --level 9
```

The analysis fails with error:

```
 ------ ----------------------------------------------------------------------------------------------------------------------- 
  Line   failing.php                                                                                                            
 ------ ----------------------------------------------------------------------------------------------------------------------- 
  40     Method MyDerivativeRetriever::getDerivative() should return T of Derivative but returns MyDerivative.                  
         💡 Type MyDerivative is not always the same as T. It breaks the contract for some argument types, typically subtypes.  
 ------ ----------------------------------------------------------------------------------------------------------------------- 
 ```

- Why is it failing? 
- What does the error mean, exactly?
- How to fix it?
