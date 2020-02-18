<?php
/**
 * The homepage for our theme.
 *
 * Not using this, in favor of using a Wordpress page with customizable HTML content blocks
 * Set front page in Wordpress backend in Settings -> Reading
 *
 * @package _envirotek
 */
?>

<?php get_header(); ?>

    <div class="headline">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex">
              <img src="<?php echo get_template_directory_uri(); ?>/img/alberta.png" class="alberta" />
              <div class="text poiret ml-4">
                <div>
                  Alberta has over <em>1.2 trillion liters</em> of toxic oilsands tailings in ponds occupying over 220 square kilometres.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12">
            <div class="line">
              <img src="<?php echo get_template_directory_uri(); ?>/img/dot.jpg" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="what">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title poiret uppercase">EnviroTek Remediation</div>
            <div class="description poiret mb-5">
              has developed a breakthrough technology for the transformation of toxic oil sands tailings into Tier II landfill classified material and/or non-hazardous industrial fillers. This technology turns the world’s largest industrial contamination problem into industrial inputs for generating economic value.
              <br/><br/>
              EnviroTek stands out from the competition by combining industry leading research and development with a low-capital partnership business model resulting in cost effective solutions.
            </div>
          </div>
          <div class="col-lg-6">
            <div class="tailing-pond">
              <img src="<?php echo get_template_directory_uri(); ?>/img/tailing-pond.jpg" />
            </div>
            <div class="sans-serif caption pt-3">
              A tailings pond near the Syncrude oilsands mining operation, Alberta, Canada
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="advantages green-bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-auto">
            <div class="title poiret uppercase">
              <img src="<?php echo get_template_directory_uri(); ?>/img/letter-c.png" class="letter-c" />
              <div>ompetitive Advantages</div>
            </div>
          </div>
          <div class="col-sm d-none d-sm-block w-100">
            <div class="line mt-4"></div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-4 pb-5">
            <div class="rd icon"></div>
            <div class="caption sans-serif uppercase light-green">
              Internal R&D<br/>Capabilities
            </div>
          </div>
          <div class="col-md-4 pb-5">
            <div class="pt icon"></div>
            <div class="caption sans-serif uppercase light-green">
              Proprietary<br/>Technologies
            </div>
          </div>
          <div class="col-md-4 pb-5">
            <div class="oe icon"></div>
            <div class="caption sans-serif uppercase light-green">
              Operational<br/>Experience
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="remediation">
      <div class="container">
        <div class="row">
          <div class="col-sm d-none d-sm-block w-100">
            <div class="line mt-4"></div>
          </div>
          <div class="col-sm-auto">
            <div class="title poiret uppercase">
              <div>Remediation Pro</div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/letter-c.png" class="letter-c" />
              <div>ess</div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 pb-5">
            <div class="slurry photo"></div>
            <div class="step">
              <img src="<?php echo get_template_directory_uri(); ?>/img/number-1.png" />
              <div class="title poiret uppercase mt-4 text-center">Slurry</div>
              <div class="caption poiret text-center mt-4">
                Chemicals are mixed into slurry and combination sits overnight.
              </div>
            </div>
          </div>
          <div class="col-lg-4 pb-5">
            <div class="treated photo"></div>
            <div class="step">
              <img src="<?php echo get_template_directory_uri(); ?>/img/number-2.png" />
              <div class="title poiret uppercase mt-4 text-center">Treated Tailings</div>
              <div class="caption poiret text-center mt-4">
                Product completely solidifies producing a compound of tailing and resin.
              </div>
            </div>
          </div>
          <div class="col-lg-4 pb-5">
            <div class="final photo"></div>
            <div class="step">
              <img src="<?php echo get_template_directory_uri(); ?>/img/number-3.png" />
              <div class="title poiret uppercase mt-4 text-center">Final Product</div>
              <div class="caption poiret text-center mt-4">
                Product after air-drying. Entire process takes 3-4 days depending on environmental factors.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team green-bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-auto">
            <div class="title poiret uppercase">
              <div>Our Experien</div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/letter-c.png" class="letter-c" />
              <div>ed Team</div>
            </div>
          </div>
          <div class="col-sm d-none d-sm-block w-100">
            <div class="line mt-4"></div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3">
            <div class="photo text-md-left text-lg-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/brian.jpg" />
            </div>
            <div class="bio">
              <div class="title-small poiret uppercase caption mt-4">Brian Leeners</div>
              <div class="poiret uppercase sub-caption gray">CEO</div>
              <div class="sans-serif gray mt-4">
                <ul>
                  <li>25 years executive management and board level experience</li>
                  <li>Private & Public company specialist</li>
                  <li>Founder, Nexvu Capital Corp</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-5 mt-lg-0">
            <div class="photo text-md-left text-lg-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/maria.jpg" />
            </div>
            <div class="bio">
              <div class="title-small poiret uppercase mt-4 caption">Maria Conejo</div>
              <div class="poiret uppercase sub-caption gray">President</div>
              <div class="sans-serif gray mt-4">
                <ul>
                  <li>10 years in environmental technology R&D</li>
                  <li>Expert biochemical and bacterial metabolic processes</li>
                  <li>Secure Energy and Kerui Petroleum</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-5 mt-lg-0">
            <div class="photo text-md-left text-lg-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/greg-o.jpg" />
            </div>
            <div class="bio">
              <div class="title-small poiret uppercase mt-4 caption">Greg Olesen</div>
              <div class="poiret uppercase sub-caption gray">COO</div>
              <div class="sans-serif gray mt-4">
                <ul>
                  <li>38 years experience across the oil & gas, and chemical manufacturing sectors</li>
                  <li>Led critical projects in both national and international arenas</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-5 mt-lg-0">
            <div class="photo text-md-left text-lg-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/greg-p.jpg" />
            </div>
            <div class="bio">
              <div class="title-small poiret uppercase mt-4 caption">Greg Pearson</div>
              <div class="poiret uppercase sub-caption gray">Director</div>
              <div class="sans-serif gray mt-4">
                <ul>
                  <li>Over 30 years of experience in private and public sector capital markets</li>
                  <li>Founder, Nexvu Capital Corp</li>
                  <li>Directly responsible for over $100 million in financings</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="collaborations">
      <div class="container">
        <div class="row">
          <div class="col-sm d-none d-sm-block w-100">
            <div class="line mt-4"></div>
          </div>
          <div class="col-sm-auto">
            <div class="title poiret uppercase">
              <img src="<?php echo get_template_directory_uri(); ?>/img/letter-c.png" class="letter-c" />
              <div>ollaborations</div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 offset-lg-1 d-flex justify-content-center justify-content-lg-end align-items-center logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cn.png" class="cn" />
          </div>
          <div class="sans-serif col-lg-5 text-center text-lg-left gray blurb pl-lg-5 mt-4">
            In discussions on Oil Sands Pilot and Bacterial Hydrocarbon Remediation sample testing.
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 offset-lg-1 d-flex justify-content-center justify-content-lg-end align-items-center logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/oilserv.png" class="oilserv" />
          </div>
          <div class="sans-serif col-lg-5 text-center text-lg-left gray blurb pl-lg-5 mt-4">
            Early discussions on an integrated application partnership for Bacterial Hydrocarbon Remediation for the Middle East and North Africa.
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 offset-lg-1 d-flex justify-content-center justify-content-lg-end align-items-center logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/schlumberger.png" class="schlumberger" />
          </div>
          <div class="sans-serif col-lg-5 text-center text-lg-left gray blurb pl-lg-5 mt-4">
            In discussions regarding end-product testing/applications subject to the Oil Sands Pilot.
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 offset-lg-1 d-flex justify-content-center justify-content-lg-end align-items-center logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cp-services.png" class="cp-services" />
          </div>
          <div class="sans-serif col-lg-5 text-center text-lg-left gray blurb pl-lg-5 mt-4">
            Drafting terms for an integrated application partnership for Bacterial Hydrocarbon Remediation.
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
