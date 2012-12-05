JcdcFoundation
===

A module for Zend Framework 2 integration with Foundation 3 front-end framework.


####This module provides:
* View Helpers
  * <b title="JcdcFoundation\View\Helper\Alert">Alerts</b> displays a box for status messages and/or flashMessenger display.
  * <b title="JcdcFoundation\View\Helper\Label">Labels</b> for tagging content or specifying importance.
* Form View Helpers

<b title="JcdcFoundation\Form\View\Helper\FoundationForm">FoundationForm</b> helper for rendering entire forms in one statement.
   For example

```php
<?= $this->foundationForm($this->form, '/form/action', 'METHOD' ); ?>
```
First replace `'/form/action'` with the route name or path to your controller action.  
Lastly, replace the `'METHOD'`, specifying the method of the request (GET, POST, etc.).