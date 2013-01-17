<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>err null: The portfolio of Roland M. Quiros</title>
    <?php include "depends.php"; ?>
    <link href="css/resume.css?v=1.1" rel="stylesheet" type="text/css">
    
    <script src="js/bouncingball.js" type="text/javascript"></script>
    <script src="js/resume.js" type="text/javascript"></script>
    
</head>

<body>
<div id="content">
    <?php include "menu.php"; ?>
    <div id="resume">
        <div id="bouncing-ball-outer">
            <div id="bouncing-ball"></div>
        </div>
        
        <div id="resume-text">
            <div class="resume-section" id="education">
                <h1>education</h1>
                California Polytechnic State University, San Luis Obispo<br>
                Bachelor of Science, Electrical Engineering<br>
                Minor in Computer Science<br>
                Graduated June 2012<br>
            </div>
            
            <div class="resume-section" id="experience">
                <h1>experience</h1>
                <div class="resume-subsection" id="hubsu">
                    <h3>Art Director, Contract - HUBSU, Inc. (June 2012-)</h3>
                    <ul>
                        <li>Charged with mass rebranding of a small, Las Vegas-based Craigslist alternative, and the resulting website redesign</li>
                        <li>Prototyped new page layouts in Photoshop and implemented them with HTML and CSS</li>
                        <li>Delegated site layout work to programmers and overlooked artists working on various marketing materials</li>
                        <li>Installed and managed Mercurial source control repository and Bugzilla issue tracking</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="cla">
                    <h3>Student IT Technician - Cal Poly SLO, College of Liberal Arts (October 2010-August 2012)</h3>
                    <ul>
                        <li>Installed, upgraded, troubleshot, and transported computers, printers, and other hardware</li>
                        <li>Assisted numerous liberal arts professors with various technology problems</li>
                        <li>Wrote detailed documentation on install and repair procedures</li>
                        <li>Maintained an expansive MySQL-based equipment database</li>
                        <li>Configured remote printers and print servers</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="compositesw">
                    <h3>Software Engineering Intern - Composite Software (June 2011-August 2011)</h3>
                    <ul>
                        <li>Designed and implemented database abstraction components for large-scale data virtualization software.</li>
                        <li>Created database metadata introspection Java classes for XML files, Excel-ODBC, ODBC sources, as well as several internal sources</li>
                        <li>Identified, reported, and evaluated bugs using JIRA</li>
                    </ul>
                </div>
            </div>
                
            <div class="resume-section" id="skills">
                <h1>skills</h1>
                    
                <div class="resume-subsection" id="languages">
                    <h3>Programming Languages</h3>
                    C/C++, C#, Java, Python, HTML/CSS, XML, Lua, VHDL, Javascript
                </div>

                <div class="resume-subsection" id="libraries">
                    <h3>Libraries and Frameworks</h3>
                    OpenGL, NVIDIA CUDA, Lua C API, JUnit, Google Test, JQuery, Simple Direct Media Layer (SDL), Simple and Fast Multimedia Library (SMFL)<br>
                    Familiarity with Qt, Java.Swing, JDBC, ODBC
                </div>

                <div class="resume-subsection" id="platforms">
                    <h3>Operating Systems and Hardware Platforms</h3>
                    GNU/Linux, OS X, Windows 2000/2003SE/ME/XP/Vista/7, Atmel ATMega, Microchip PIC24
                </div>

                <div class="resume-subsection" id="applications">
                    <h3>Applications</h3>
                    Subversion, Mercurial, Git, Eclipse, Netbeans, Microsoft Visual Studio, CMake, JIRA, Microsoft Office, Adobe Photoshop, Adobe Illustrator, Blender3d
                </div>
            </div>
            <div class="resume-section" id="projects">
            	<h1>technical projects</h1>
                <div class="resume-subsection" id="mbari">
                    <h3>Free Ocean Carbon Enrichment Chassis, Dec. 2011 - May 2012</h3>
                    <ul>
                        <li>Collaborated with Monterey Bay Aquarium Research Institute to write software for an shallow water sensor array, used to measure oceanic carbon content</li>
                        <li>Wrote SPI communications and memory management system for several PIC24-based modules, using Microchip's C30 C compiler</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="fileserver">
                    <h3>Remote File Server, Feb. 2012 - Mar. 2012</h3>
                    <ul>
                        <li>Created a file transfer program in C, using Unix network libraries, which could send files across a network, provided a hostname and port number</li>
                        <li>Implemented two different transfer and ARQ protocols: TCP using Stop-and-Wait, and UDP using Go-Back-N</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="cuda">
                	<h3>NVIDIA CUDA- Parallelized GPU Raytracer, Apr. 2011 - Jun. 2011</h3>
                    <ul>
                        <li>Modified a 3D raytracer using NVIDIA's cutting-edge Compute Unified Device Architecture (CUDA)</li>
                        <li>Wrote kernels to massively parallelize sequential raytracer code, drastically increasing performance by, reducing several minute-long render periods to mere seconds</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="darwin">
                    <h3>Artificial Intelligence Project - "Darwin is Dead," Sep. 2011 - Dec. 2011</h3>
                    <ul>
                        <li>Developed 2D shooting game demonstrating piecewise enemy generation via genetic algorithm, using C# and XNA</li>
                        <li>Designed the base architecture, which was successfully utilized and extended by development team of seven</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="delabismo">
                    <h3>Personal Project - Del Abismo Game Library, Aug. 2011 - Ongoing</h3>
                    <ul>
                        <li>Developing cross-platform computer game library with OpenGL and C++</li>
                        <li>Extensively applies an Entity System architecture for game object composition</li>
                        <li>Utilizes embedded Lua to create and manage assets and system behavior during execution</li>
                        <li>Uses CMake and CTest to automate build script generation and unit testing</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="mazzetti">
                	<h3>Cal Poly SWE Team Tech - Mazzetti & Associates (M +NLB), Sep. 2009 - Jul. 2010</h3>
                    <ul>
                        <li>Designed and prototyped a "Code Blue" hospital nurse call system, a device which monitors patient heart patterns and alerts medical workers when irregularities occur
                        <li>Implemented an ECG analysis test program using a real-time QRS complex detection algorithm</li>
                        <li>Successfully collaborated with a multidisciplinary team of engineering students, winning first place in Team Tech national competition</li>
                    </ul>
                </div>
                <div class="resume-subsection" id="lockheed">
	                <h3>Cal Poly SWE Team Tech - Lockheed Martin, Sep. 2008 - Jun. 2009</h3>
                    <ul>
                        <li>Developed a wind tunnel testing environment for small-scale, piecewise jet wing models</li>
                        <li>Created a motor controller software interface to allow actuation of model control surfaces for testing and demonstration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</div>
</body>

</html>
