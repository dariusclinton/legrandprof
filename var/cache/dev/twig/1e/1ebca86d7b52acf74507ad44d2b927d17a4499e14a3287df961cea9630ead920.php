<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_84f906b26a7811d2050fb284598e96ddb0372e1ebbdbe94962d9a1f06b075fdc extends Twig_Template
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
        $__internal_8a094ce1161ca63ba1f2de9746fed84c32320745ad0231c2c72bdfb6f304fffd = $this->env->getExtension("native_profiler");
        $__internal_8a094ce1161ca63ba1f2de9746fed84c32320745ad0231c2c72bdfb6f304fffd->enter($__internal_8a094ce1161ca63ba1f2de9746fed84c32320745ad0231c2c72bdfb6f304fffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8a094ce1161ca63ba1f2de9746fed84c32320745ad0231c2c72bdfb6f304fffd->leave($__internal_8a094ce1161ca63ba1f2de9746fed84c32320745ad0231c2c72bdfb6f304fffd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
