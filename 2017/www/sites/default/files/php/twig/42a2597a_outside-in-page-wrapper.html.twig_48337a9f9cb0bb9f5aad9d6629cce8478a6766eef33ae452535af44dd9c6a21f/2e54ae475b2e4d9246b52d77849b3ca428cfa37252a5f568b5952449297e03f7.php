<?php

/* core/modules/outside_in/templates/outside-in-page-wrapper.html.twig */
class __TwigTemplate_9657fe13afac7e466dd2e8560e05df319530852102270db064811dad9b3d150a extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 15
            echo "  <div id=\"main-canvas-wrapper\">
    <div id=\"main-canvas\">
      ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
    </div>
  </div>
  <div class=\"offcanvas-lining\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/outside_in/templates/outside-in-page-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  45 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a page wrapper.*/
/*  **/
/*  * For consistent wrapping to {{ page }} render in all themes.*/
/*  **/
/*  * Available variables:*/
/*  * - children: Contains the child elements of the page.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if children %}*/
/*   <div id="main-canvas-wrapper">*/
/*     <div id="main-canvas">*/
/*       {{ children }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="offcanvas-lining"></div>*/
/* {% endif %}*/
/* */
