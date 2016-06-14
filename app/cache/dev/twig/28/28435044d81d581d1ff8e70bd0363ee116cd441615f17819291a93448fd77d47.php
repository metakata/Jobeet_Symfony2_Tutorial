<?php

/* EnsJobeetBundle:job:admin.html.twig */
class __TwigTemplate_ea19004addf830656d7bacfca7e3672f10b4df387f1bbd7bae596e9a2a41db63 extends Twig_Template
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
        $__internal_754119aa0615461072c869805ee7ad05fca966965c6bd28f156cea4d6e502669 = $this->env->getExtension("native_profiler");
        $__internal_754119aa0615461072c869805ee7ad05fca966965c6bd28f156cea4d6e502669->enter($__internal_754119aa0615461072c869805ee7ad05fca966965c6bd28f156cea4d6e502669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:job:admin.html.twig"));

        // line 1
        echo "<div id=\"job_actions\">
  <h3>Admin</h3>
  <ul>
    ";
        // line 4
        if ( !$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\">Edit</a></li>
      <li>
      \t<form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\" method=\"post\">
      \t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
            echo "
      \t\t<button type=\"submit\">Publish</button>
      \t</form>
      </li>
    ";
        }
        // line 13
        echo "    <li>
      <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
        <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
      </form>
    </li>
    ";
        // line 19
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 20
            echo "      <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
        ";
            // line 21
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired", array())) {
                // line 22
                echo "          Expired
        ";
            } else {
                // line 24
                echo "          Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires", array()), "html", null, true);
                echo "</strong> days
        ";
            }
            // line 26
            echo " 
        ";
            // line 27
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                // line 28
                echo "          - <a href=\"\">Extend</a> for another 30 days
        ";
            }
            // line 30
            echo "      </li>
    ";
        } else {
            // line 32
            echo "      <li>
        [Bookmark this <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug", array()), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug", array()), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug", array()))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
      </li>
    ";
        }
        // line 36
        echo "  </ul>
</div>";
        
        $__internal_754119aa0615461072c869805ee7ad05fca966965c6bd28f156cea4d6e502669->leave($__internal_754119aa0615461072c869805ee7ad05fca966965c6bd28f156cea4d6e502669_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  98 => 33,  95 => 32,  91 => 30,  87 => 28,  85 => 27,  82 => 26,  76 => 24,  72 => 22,  70 => 21,  63 => 20,  61 => 19,  54 => 15,  50 => 14,  47 => 13,  39 => 8,  35 => 7,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div id="job_actions">*/
/*   <h3>Admin</h3>*/
/*   <ul>*/
/*     {% if not job.isActivated %}*/
/*       <li><a href="{{ path('ens_job_edit', { 'token': job.token }) }}">Edit</a></li>*/
/*       <li>*/
/*       	<form action="{{ path('ens_job_publish', { 'token':job.token }) }}" method="post">*/
/*       		{{ form_widget(publish_form) }}*/
/*       		<button type="submit">Publish</button>*/
/*       	</form>*/
/*       </li>*/
/*     {% endif %}*/
/*     <li>*/
/*       <form action="{{ path('ens_job_delete', { 'token': job.token }) }}" method="post">*/
/*         {{ form_widget(delete_form) }}*/
/*         <button type="submit" onclick="if(!confirm('Are you sure?')) { return false; }">Delete</button>*/
/*       </form>*/
/*     </li>*/
/*     {% if job.isActivated %}*/
/*       <li {% if job.expiresSoon %} class="expires_soon" {% endif %}>*/
/*         {% if job.isExpired %}*/
/*           Expired*/
/*         {% else %}*/
/*           Expires in <strong>{{ job.getDaysBeforeExpires }}</strong> days*/
/*         {% endif %}*/
/*  */
/*         {% if job.expiresSoon %}*/
/*           - <a href="">Extend</a> for another 30 days*/
/*         {% endif %}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>*/
/*         [Bookmark this <a href="{{ url('ens_job_preview', { 'token': job.token, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}">URL</a> to manage this job in the future.]*/
/*       </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
