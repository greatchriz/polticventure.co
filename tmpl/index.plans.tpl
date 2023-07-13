{foreach from=$index_plans item=p}
  {if !$p.closed}
    <div class="col-lg-4 col-md-6 md-mb-30 md-mb-0 sm-mb-30">
      <div class="pricing-table white-bg">
        <div class="pricing-table-header">
          <h3 class="table-title">{$p.name|escape:html}</h3>
        </div>
        <div class="pricing-icon mb-40">
          <img
            src="assets/images/pricing/style1/2.png"
            alt=""
          >
        </div>
        <p><i class="fa fa-check"></i><span>Duration: {$p.q_days|escape:html}</span></p>


        {if $p.plans}
          {foreach from=$p.plans item=o}
            <div class="pricing-table-price">
              <div class="pricing-table-bags">
                <span class="pricing-currency">%</span>
                <span class="table-price-text">{$o.percent|string_format:"%.2f"}</span>
                <span class="table-period">/ Daily</span>
              </div>
            </div>
            <div class="pricing-table-body">
              <ul>
                <li><i class="fa fa-check"></i><span>ROI: {$o.name|escape:html}</span></li>
                <li><i class="fa fa-check"></i><span>Deposit Amount: {$o.deposit}</span></li>
                <li><i class="fa fa-check"></i><span>Duration: {$p.q_days|escape:html}</span></li>
                {* <li><i class="fa fa-check"></i><span>Minimum: $100</span></li>
                              <li><i class="fa fa-check"></i><span>Maximum: $4,999</span></li> *}
                <li><i class="fa fa-check"></i><span>Referral Bonus: 10%</span></li>
              </ul>
            </div>
          {/foreach}

        {/if}
        {if $userinfo.logged}
          <form method=post>
            <input
              type=hidden
              name=a
              value=deposit
            >
            <div class="btn-part">
              <input
                type=submit
                value="Make deposit"
                class="readon price"
              >
            </div>
            <input
              type=hidden
              name=h_id
              value={$p.id}
            >
          </form>

        {else}
          <div class="btn-part">
            <a
              class="readon price"
              href="/?a=login"
            >Get Started</a>
          </div>
        {/if}

      </div>
    </div>
  {/if}
{/foreach}
