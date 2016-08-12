<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5db31a3c1f0ee2a25a8c779cb47242703dc7e96d3900fde614b3cfd494693cf9 extends Twig_Template
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
        $__internal_2bccf594f2456d98091ed94c07c7fcd7c5d1327d399c5309da616fc0602a7728 = $this->env->getExtension("native_profiler");
        $__internal_2bccf594f2456d98091ed94c07c7fcd7c5d1327d399c5309da616fc0602a7728->enter($__internal_2bccf594f2456d98091ed94c07c7fcd7c5d1327d399c5309da616fc0602a7728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2bccf594f2456d98091ed94c07c7fcd7c5d1327d399c5309da616fc0602a7728->leave($__internal_2bccf594f2456d98091ed94c07c7fcd7c5d1327d399c5309da616fc0602a7728_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
