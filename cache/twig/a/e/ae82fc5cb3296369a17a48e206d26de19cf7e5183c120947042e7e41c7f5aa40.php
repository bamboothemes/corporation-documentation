<?php

/* partials/analytics.html.twig */
class __TwigTemplate_ae82fc5cb3296369a17a48e206d26de19cf7e5183c120947042e7e41c7f5aa40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57776306-2', 'auto');
  ga('send', 'pageview');

</script>
";
    }

    public function getTemplateName()
    {
        return "partials/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
