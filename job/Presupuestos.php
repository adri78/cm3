<style>

    .zearch:focus{
        background: rgba(30, 168, 234, 0.67);
        width: 400px;
    }
    #intro .zelect {
        display: inline-block;
        background-color: white;
        min-width: 300px;

        cursor: pointer;
        line-height: 36px;
        border: 1px solid #dbdece;
        border-radius: 6px;
        position: relative;
    }
    #intro .zelected {
        font-weight: bold;
        padding-left: 10px;
    }
    #intro .zelected.placeholder {
        color: #999f82;
    }
    #intro .zelected:hover {
        border-color: #c0c4ab;
        box-shadow: inset 0px 5px 8px -6px #dbdece;
    }
    #intro .zelect.open {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    #PreRes{
        left: 50%;
        width: 600px;
        height: 500px;
        position: absolute;
        top: 100px;
        background: rgba(20,20,20,0.95);
    }

</style>


<div class="NV" id="PreRes">
    <div style=" width: 100%;height: 500px; "  >
        <div class="form-group input-group" style="z-index: 100;width: 98%;">
            <button class="btn btn-danger btn-circle btn-xs" style="float:right; " onclick="ML();" >X</button>
            <h4 class="TC" style="color: #0311b5;font-weight: bold;">Repuetos</h4>
            <section id="intro" style="color:black;">
                <select id="IDEqui" onchange="LRESPU(this.value)">
                    <option value="4">SAMSUNG - J1 ACE - J110/ 111</option><option value="61">LG - L70 FINO - D290 </option><option value="35">SAMSUNG - S3 - I9300</option><option value="9">SAMSUNG - J2 PRIME - G532</option><option value="10">SAMSUNG - J5 PRIME - G570</option><option value="12">SAMSUNG - J5 - J500</option><option value="13">SAMSUNG - J5 2016 - J510</option><option value="14">SAMSUNG - J3 2016 - J310/ 320</option><option value="97">SAMSUNG - A3 2017 - A320</option><option value="16">SAMSUNG - S6 EDGE - G925I</option><option value="17">SAMSUNG - NOTE 1 - N7000</option><option value="18">SAMSUNG - GRAND NEO PLUS - I9060/ 9</option><option value="19">SAMSUNG - POCKET - S5301</option><option value="21">SAMSUNG - A3 - A300</option><option value="22">SAMSUNG - A5 - A500</option><option value="23">SAMSUNG - ACE 4 - G313/ 316/ 318 </option><option value="24">SAMSUNG - CORE PLUS - G350</option><option value="25">SAMSUNG - CORE 2 - G355</option><option value="26">SAMSUNG - CORE PRIME - G360</option><option value="27">SAMSUNG - GRAND PRIME - G530/ G531</option><option value="28">SAMSUNG - GRAND 2 - G7100/ 7102/ 71</option><option value="29">SAMSUNG - S3 MINI - I8190</option><option value="30">SAMSUNG - J7 - J700</option><option value="31">SAMSUNG - J7 2016 - J710</option><option value="32">SAMSUNG - J7 PRIME - G610</option><option value="34">SAMSUNG - J2 - J200</option><option value="36">SAMSUNG - S4 MINI - I9190</option><option value="37">SAMSUNG - S4 - I9500</option><option value="38">SAMSUNG - S5 - G900</option><option value="39">SAMSUNG - S6 - G920</option><option value="40">SAMSUNG - J1 MINI PRIME - J105/ 106</option><option value="41">SAMSUNG - J1 - J100</option><option value="42">SAMSUNG - CORE - I8260</option><option value="108">SAMSUNG - FAME - S6810</option><option value="44">MOTOROLA - E - XT1021</option><option value="45">MOTOROLA - G - XT1032</option><option value="46">MOTOROLA - X - XT1056/ 1058</option><option value="47">MOTOROLA - G2 - XT1068/ 1063</option><option value="48">MOTOROLA - X2 - XT1097</option><option value="49">MOTOROLA - E2 - XT1027</option><option value="50">MOTOROLA - G3 - XT1540/ 1542</option><option value="51">MOTOROLA - X PLAY - XT1563</option><option value="52">MOTOROLA - X STYLE - XT1575</option><option value="53">MOTOROLA - G4 PLAY - XT1601</option><option value="54">MOTOROLA - G4 - XT1621</option><option value="55">LG - SPIRIT - H440</option><option value="56">LG - K4 - K120AR</option><option value="57">LG - F60 - D390</option><option value="58">LG - G2 - MINI D610</option><option value="59">LG - G3 STYLUS - D693</option><option value="60">LG - LEON - H340</option><option value="62">LG - G PRO LITE - D681 </option><option value="63">LG - L1 DUAL - E420</option><option value="181">LG - L9 - P768</option><option value="65">LG - OPTIMUS G - E975</option><option value="66">LG - G2 - D806</option><option value="143">IPHONE - 4</option><option value="69">SAMSUNG - NOTE 2 - N7100</option><option value="71">SAMSUNG - S2 - I9100</option><option value="72">SAMSUNG - MEGA - I9150</option><option value="73">SAMSUNG - ACE STYLE - G357</option><option value="74">LG - G4 STYLUS - H635</option><option value="75">LG - L7 - P700/ P705</option><option value="77">NOKIA - 530 - RM-1017</option><option value="78">NOKIA - 535 - RM-1090</option><option value="80">NOKIA - 520 - RM-915</option><option value="81">SAMSUNG - A3 2016 - A310</option><option value="82">SAMSUNG - A5 2016 - A510</option><option value="83">SAMSUNG - ADVANCE - I9070</option><option value="84">SAMSUNG - J5 PRO - J530</option><option value="85">SAMSUNG - J7 NEO - J701</option><option value="86">SAMSUNG - J7 PRO - J730</option><option value="87">SAMSUNG - NOTE 3 - N900</option><option value="88">SAMSUNG - NOTE 4 - N910</option><option value="89">SAMSUNG - NOTE 5 - N920</option><option value="90">SAMSUNG - POCKET 2 - G130</option><option value="91">SAMSUNG - POCKET NEO - S5310</option><option value="92">SAMSUNG - S4 AMERICANO - I9505</option><option value="93">SAMSUNG - S5 MINI - G800</option><option value="94">SAMSUNG - S6 EDGE PLUS - G928I</option><option value="95">SAMSUNG - S7 - G930</option><option value="96">SAMSUNG - S7 EDGE - G935</option><option value="103">SAMSUNG - TREND - S7560</option><option value="98">SAMSUNG - A5 2017 - A520</option><option value="99">SAMSUNG - A7 2016 - A710</option><option value="100">SAMSUNG - A7 2017 - A720</option><option value="101">SAMSUNG - S8 - G950</option><option value="102">SAMSUNG - S8 PLUS - G955</option><option value="104">SAMSUNG - TREND LITE - S7390/ 7392</option><option value="105">SAMSUNG - TREND PLUS - S7580</option><option value="106">SAMSUNG - YOUNG 2 - G130</option><option value="107">SAMSUNG - WIN - I8550</option><option value="109">SAMSUNG - FAME LITE - S6790</option><option value="199">ALCATEL - IDOL 2 - OT6037</option><option value="110">MOTOROLA - G4 PLUS - XT1641</option><option value="198">ALCATEL - IDOL - OT6030</option><option value="111">MOTOROLA - C - XT1756</option><option value="112">MOTOROLA - C PLUS - XT1725</option><option value="113">MOTOROLA - E4 - XT1767</option><option value="114">MOTOROLA - E4 PLUS - XT1772</option><option value="115">MOTOROLA - G5 - XT1671</option><option value="116">MOTOROLA - G5 PLUS - XT1680</option><option value="117">MOTOROLA - G5S - XT1063</option><option value="118">MOTOROLA - G5S PLUS - XT1800</option><option value="119">MOTOROLA - RAZR HD - XT925</option><option value="120">MOTOROLA - RAZR I - XT890</option><option value="121">MOTOROLA - RAZR D1 - XT915</option><option value="122">MOTOROLA - RAZR D3 - XT919</option><option value="123">MOTOROLA - Z PLAY - XT1635</option><option value="124">MOTOROLA - Z2 PLAY - XT1710</option><option value="125">MOTOROLA - SMART MIX - XT550</option><option value="126">MOTOROLA - SMART PLUS - XT615</option><option value="127">ALCATEL - PIXI 3 - OT4009/ 4013</option><option value="128">ALCATEL - POP C2 - OT4032</option><option value="129">ALCATEL - POP C3 - OT4033</option><option value="130">ALCATEL - POP C5 - OT5036</option><option value="131">ALCATEL - POP C7 - OT7040</option><option value="132">ALCATEL - POP STAR - OT5022</option><option value="133">ALCATEL - IDOL MINI - OT6012</option><option value="134">ALCATEL - IDOL 2 MINI - OT6036</option><option value="135">ALCATEL - IDOL 3 4.7 - OT6039</option><option value="136">ALCATEL - IDOL 3 5.5 - OT6045</option><option value="137">ALCATEL - POP C9 - OT7047</option><option value="138">ALCATEL - POP C1 - OT4015</option><option value="139">ALCATEL - HERO - OT8020</option><option value="140">ALCATEL - U5 - OT50440</option><option value="141">ALCATEL - IDOL X - OT6040</option><option value="142">ALCATEL - A3 XL - OT9008A</option><option value="144">IPHONE - 4S</option><option value="145">IPHONE - 5</option><option value="146">IPHONE - 5C</option><option value="147">IPHONE - 5S</option><option value="148">IPHONE - 6</option><option value="149">IPHONE - 6S</option><option value="150">IPHONE - 6S PLUS</option><option value="151">IPHONE - SE</option><option value="152">IPHONE - 7</option><option value="153">IPHONE - 7 PLUS</option><option value="154">IPHONE - 8</option><option value="155">IPHONE - 8 PLUS</option><option value="156">IPHONE - X</option><option value="157">LG - BELLO - D335</option><option value="158">LG - G3 - D855</option><option value="159">LG - G3 BEAT - D722</option><option value="160">LG - G4 - H815</option><option value="161">LG - G4 BEAT - H735</option><option value="162">LG - G5 - H850</option><option value="163">LG - G6 - H870</option><option value="164">LG - JOY/KITE - H220</option><option value="165">LG - K4 2017 - X230</option><option value="166">LG - K7 - X210</option><option value="167">LG - K8 - K350</option><option value="168">LG - K8 2017 - X240</option><option value="169">LG - K10 - K430</option><option value="170">LG - K10 2017 - M250</option><option value="171">LG - L1 - E411</option><option value="172">LG - L20 - D100</option><option value="173">LG - L3 - E400</option><option value="174">LG - L3 II - E430</option><option value="175">LG - L30 - D120</option><option value="176">LG - L4 TV - E465</option><option value="177">LG - L40 - D160</option><option value="178">LG - L5 - E612</option><option value="179">LG - L5 II - E460</option><option value="180">LG - L7 II - P710/ P712</option><option value="182">LG - L90 - D415</option><option value="183">LG - Q6 - M700</option><option value="184">LG - X MAX - K240</option><option value="185">LG - X POWER - K220</option><option value="186">LG - PRIME 2 - X170</option><option value="187">LG - V10 - H960</option><option value="188">LG - V20 - H990</option><option value="189">NOKIA - N8 - RM-596</option><option value="190">NOKIA - 630 - RM-978</option><option value="191">NOKIA - 640 - RM-1073</option><option value="192">NOKIA - 640 XL - RM-1066</option><option value="193">NOKIA - 900 - RM-823</option><option value="194">NOKIA - 720 - RM-885</option><option value="195">NOKIA - 430 - RM-1039</option><option value="196">NOKIA - 435 - RM-1069</option><option value="197">NOKIA - 620 - RM-846</option>             </select>
            </section>
        </div>
        <hr>
        <table class="table table-bordered sortable" id="lstR" width="100%;">
            <thead class="Titulo">
            <tr><th>S</th>
                <th>Respuesto</th>
                <th style="width:26px;"> T1</th>
                <th style="width:26px;"> T2</th>
                <th style="width:26px;"> T3</th>
            </thead>
            <tbody id="LstRepus">
            <tr>
        </table>
    </div>
</div>