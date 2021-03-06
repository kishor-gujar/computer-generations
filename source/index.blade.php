@php ($activeNav = '/')

@extends('_layouts.master')

@section('body')
    <div class="wrapper">
        <h1>First Generation</h1>
        <div class="flex-container">
            <p class="info">Far from today’s computer technology, the first electric computers were very different. <br> First
            generation computers could take up the space of an entire room, were expensive to run, and generated much heat, often the cause of their own malfunctions. The first computers only
            carried out mathematical equations. Only one calculation was solved at a time, using punch card and paper tape as input and printouts as output. <br> In 1944 at
            Harvard University, Howard Aiken and Grace Hopper started work on the MARK computer series in partnership with IBM. Mark I was controlled by pre-punched tape to
            calculate addition, subtraction, multiplication, and division using previously calculated results. It required about 4 seconds to perform a multiplication problem,
            and took up the space of a giant room. It as put to use with the war effort. Aiken was a huge influence on the growing of computer technology. <br> He often spoke
            about how important they were and showed that it was possible to make a machine that could carry out a series of commands. At Harvard, he founded the world's
            first full pledged computer science program class. <br> Computer science would have never grown to where it is today if it weren't for this giant leap forward that
            the Mark I provided.</p>
            <div class="image">
                <img src="assets/images/first generation.jpg">
            </div>
        </div>
            
        <h2>Introduction to Vacuum Tubes</h2>
        <p>The first generation of computer history is generally characterized by the widely used vacuum
            tubes. A vacuum tube worked similarly to a light bulb and was invented
            around the same time as a bulb. It made signals stronger; as an amplifier. They acted as switches as well by
            instigating and stopping the flow of electricity. They
            also served as magnetic drums for memory. However, these components took up very much space, making the
            computer very big. This electric current controlling device
            was first developed through research by Thomas Edison, Eugen Goldstein, Nikola Tesla, and Johann Wilhelm
            Hittorf. Edison patented his research and discoveries in 1884
            but he didn’t quite understand the physics or importance. Later in early 20th century, John Ambrose Fleming
            used a diode tube to detect radio signals, which led to the
            development of the triode tube. These inventions started further advancement in telephony (technology in
            transmitters and receivers).
            <br>
            <h3> ENIAC 1</h3>

            <p>The Electrical Numerical Integrator and Calculator (ENIAC I) was developed in 1946 by John
            Mauchly and John Presper Eckert. Its use of vacuum tubes was more efficient
            than the mechanical switches of the Mark I. ENIAC was made initially for the American military, for they
            needed a computer to calculate settings used for weapons under
            different conditions, in terms of accuracy. ENIAC contained 17,468 vacuum tubes, took up 1800 square feet of
            space, weighed 30 tons, and used 160 kilowatts of electricity.
            It could calculate 5,000 additions, 357 multiplications or 38 divisions in one second. Well lived, its
            development and research led to improvements of vacuum tubes. </p>

            <div class="flex-container">          
                <div>
                    <h2>The main features of the first generation are −</h2>
                    <ul>
                        <li>Vacuum tube technology</li>
                        <li>Unreliable</li>
                        <lI>Supported machine language only</li>
                        <li>Very costly</Li>
                        <li>Generated a lot of heat</li>
                        <li>Slow input and output devices</li>
                        <li>Huge size</lI>
                        <li>Need of AC</li>
                        <li>Non-portable</li>
                        <li>Consumed a lot of electricity</li>
                    </ul>
                    <br>
                    <h2>Some computers of this generation were −</h2>

                    <ul>
                        <li>ENIAC</li>
                        <li>EDVAC</li>
                        <li>UNIVAC</li>
                        <li>IBM-701</li>
                        <li>IBM-650</Li>
                    </ul>
                </div>
                <div class="image">
                    <img src="assets/images/ENIAC1.jpg">    
                </div>  
            </div>
    </div>
@endsection
