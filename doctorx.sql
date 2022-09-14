-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorx`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_index` int(11) NOT NULL,
  `login_user_id` int(255) NOT NULL,
  `dr_index` int(255) NOT NULL,
  `appointment_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_index`, `login_user_id`, `dr_index`, `appointment_date_time`) VALUES
(6, 1, 4, '2022-09-14 08:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Sr No` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `car_category` varchar(255) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Sr No`, `cat_title`, `car_category`, `cat_desc`) VALUES
(1, 'Dentist', '', 'A dentist, also known as a dental surgeon, is a health care professional who specializes in dentistry (the diagnosis, prevention, management, and treatment of diseases and conditions of the oral cavity and other aspects of the craniofacial complex including the temporomandibular joint).'),
(2, 'Allergist', '', 'An allergist / immunologist (commonly referred to as an allergist) is a physician specially trained to diagnose, treat and manage allergies, asthma and immunologic disorders including primary immunodeficiency disorders.'),
(3, 'Anaesthesiologist ', '', 'A anaesthesiologist is a doctor who has special training in giving drugs or other agents to prevent or relieve pain during surgery or other procedures.'),
(4, 'Andrology ', '', 'Andrology is a subspecialty of Urology which involves treatment of various conditions causing male infertility and male sexual dysfunction. In short, Andrology deals with male reproductive health, a counterpart to Gynaecology.'),
(5, 'Cardiologist ', '', 'A cardiologist is a healthcare provider who can treat chest pain, high blood pressure and heart failure, as well as problems with your heart valves, blood vessels and other heart and vascular issues. They can order tests like electrocardiograms, echocardiograms and CTs (computed tomography) to find out what\'s wrong'),
(6, 'Clinical', '', 'A clinical cardiac electrophysiologist (cardiac EP) is a healthcare provider who treats heart rhythm problems. A cardiac EP is a type of cardiologist. '),
(7, 'Dermatologist ', '', 'A dermatologist is a doctor who specializes in conditions involving the skin, hair, and nails. A dermatologist can identify and treat more than 3,000 conditions. These conditions include eczema, psoriasis, and skin cancer, among many others.'),
(8, 'Dietitians', '', 'Dietitians translate the science of nutrition into everyday information about food and advise people on their food and nutrition choices.'),
(9, 'Endocrinologist ', '', 'An endocrinologist can specialize in the treatment of different kinds of diabetes and other metabolic conditions such as obesity.'),
(10, 'Gastroenterologist ', '', 'A gastroenterologist is a specialist with expertise in the disorders and diseases that affect the digestive system — which includes the gastrointestinal tract (esophagus, stomach, small intestine, large intestine, rectum and anus) as well as the pancreas, liver, bile ducts and gallbladder'),
(11, 'Geriatricians ', '', 'Geriatricians are primary care doctors who have additional training in treating older adults, especially those 65 and up. People in that age range often have multiple or complex health matters and need specialized care. Geriatric doctors have the training and experience needed to address these issues.'),
(12, 'Hyperbaric physicians', '', 'Hyperbaric physicians are medical doctors who specialize in hyperbaric medicine. They use hyperbaric oxygen (HBO) therapy to treat conditions such as decompression illness and carbon monoxide poisoning.'),
(13, 'Hematologists ', '', 'Hematologists and hematopathologists are highly trained healthcare providers who specialize in diseases of the blood and blood components. These include blood and bone marrow cells. Hematological tests can help diagnose anemia, infection, hemophilia, blood-clotting disorders, and leukemia.'),
(14, 'Hepatologists ', '', 'Hepatologists are medical doctors who diagnose, treat, and manage problems associated with your liver, gallbladder, bile ducts, and pancreas.'),
(15, 'Infectious Disease', '', 'Infectious Disease specialists are physicians focused on the diagnosis and treatment of acute and chronic diseases caused by bacteria, viruses, fungi, parasites, and even prions.'),
(16, 'Intensivist ', '', 'An intensivist is a board-certified physician who provides special care for critically ill patients. Also known as a critical care physician, the intensivist has advanced training and experience in treating this complex type of patient.'),
(17, 'Oral Surgeon', '', 'An Oral Surgeon is A dentist with special training in surgery of the mouth and jaw.'),
(18, 'Neonatologist ', '', 'Neonatologist is a healthcare professional specialized in providing care for new born babies. '),
(19, 'Nephrologist ', '', 'A nephrologist is a physician who studies and deals with nephrology. Nephrology is the adult and pediatric study of the kidneys and its diseases. The nephrologist deals with the diagnosis and management of kidney disease. The kidneys are vital for maintaining normal fluid and electrolyte balance in the body.'),
(20, 'Neurologists ', '', 'Neurologists are specialists who treat diseases of the brain and spinal cord, peripheral nerves and muscles. Neurological conditions include epilepsy, stroke, multiple sclerosis (MS) and Parkinson\'s disease'),
(21, 'Neurosurgeon ', '', 'A neurosurgeon is a specially trained medical doctor who diagnoses and treats conditions that affect your nervous system — your brain, spinal cord and nerves. Neurosurgeons perform surgery on your nervous system, but they can also provide nonsurgical treatments'),
(22, 'Gynecologist ', '', 'A gynecologist is a doctor who specializes in female reproductive health. They diagnose and treat issues related to the female reproductive tract. This includes the uterus, fallopian tubes, and ovaries and breasts. '),
(23, 'Ophthalmologist ', '', 'An ophthalmologist is an eye care specialist. Unlike optometrists and opticians, ophthalmologists are doctors of medicine (MD) or doctors of osteopathy (DO) who have specific training and experience diagnosing and treating eye and vision conditions.'),
(24, 'Oncologists', '', 'A doctor who has special training in diagnosing and treating cancer. Some oncologists specialize in a particular type of cancer treatment.'),
(25, 'Orthopedist ', '', 'An orthopedist (also spelled orthopaedist) is a medical specialty focusing on injuries and diseases affecting your musculoskeletal system (bones, muscles, joints and soft tissues). Although this type of doctor is a surgeon, they often help people get relief with nonsurgical therapies'),
(26, 'Otolaryngologists ', '', 'Otolaryngologists are trained in the medical and surgical treatment of hearing loss, ear infections, balance disorders, ear noise (tinnitus), nerve pain, and facial and cranial nerve disorders. They also manage congenital (birth) disorders of the outer and inner ear'),
(27, 'Osteopath ', '', 'An osteopath aims to restore the normal function and stability of the joints to help the body heal itself. They use their hands to treat your body in a variety of ways, using a mixture of gentle and forceful techniques'),
(28, 'Parasitology ', '', 'Parasitology is the study of the interaction between parasites and their hosts. In general, parasitologists tend to concentrate on eukaryotic parasites, such as lice, mites, protozoa and worms, with prokaryotic parasites and other infectious agents the focusof fields such as bacteriology, microbiology and virology.'),
(29, 'Pathologist ', '', 'A pathologist is a medical healthcare provider who examines bodies and body tissues. He or she is also responsible for performing lab tests. A pathologist helps other healthcare providers reach diagnoses'),
(30, 'Perinatologists ', '', 'Perinatologists are doctors who handle high-risk pregnancies. They work with mothers and infants to ensure safety before, during, and after birth.'),
(31, 'Periodontist ', '', 'A periodontist is a dentist who specializes in preventing, diagnosing, and treating gum disease. They also help you manage signs of advancing gum problems like oral inflammation. Gum disease happens when the tissue around your teeth gets infected, causing inflammation'),
(32, 'Pediatrician ', '', 'A pediatrician is a medical doctor who manages the physical, behavioral, and mental care for children from birth until age 18. A pediatrician is trained to diagnose and treat a broad range of childhood illnesses, from minor health problems to serious diseases.'),
(33, '(PM&R) physician', '', 'Physical Medicine and Rehabilitation (PM&R) physicians, also known as physiatrists, treat a wide variety of medical conditions affecting the brain, spinal cord, nerves, bones, joints, ligaments, muscles, and tendons.'),
(34, 'Plastic Surgeons', '', 'Plastic surgeons repair injuries and congenital (present at birth) defects affecting appearance or function. They use reconstructive and cosmetic techniques to restore areas impacted by major illnesses such as cancer. They also perform procedures to enhance physical features for aesthetic reasons'),
(35, 'Pulmonologist ', '', 'A pulmonologist diagnoses and treats diseases of the respiratory system. You might hear these healthcare providers called lung doctors, lung specialists or chest doctors. In addition to your lungs, your respiratory system includes your nose, throat, trachea, airways, muscles and blood vessels.'),
(36, 'Radiologist', '', 'A radiologist is a specialist doctor who uses medical imaging such as x-ray, MRI, CT, ultrasound and angiography, to diagnose and treat human disease or injury'),
(37, 'Rheumatologist ', '', 'A rheumatologist is an internist or pediatrician who received further training in the diagnosis (detection), and treatment of diseases that affect the muscles, bones, joints, ligaments, and tendons. These diseases can cause pain, swelling, stiffness, and potentially cause joint deformities.'),
(38, 'Sleep Doctor', '', 'A sleep doctor is a health professional specialist who addresses issues relating to sleep, sleep disorders and sleep health. A sleep doctor may be a sleep physician or a sleep psychologist. Each type of sleep specialist deals with different aspects of sleep health'),
(39, 'Surgeon ', '', 'A surgeon is a doctor who is specially trained to perform surgery.A surgeon who has special training in operating on organs inside the chest, including the heart and lungs.'),
(40, 'urologist ', '', 'A urologist is a medical doctor specializing in conditions that affect the urinary tract in men, women and children, and diseases that affect the reproductive system. These conditions range from peeing too much or too little to being unable to father a child.'),
(41, 'Vascular surgeons', '', 'Vascular surgeons manage veins and arteries in every part of the body except the brain and the heart. For example, vascular surgeons handle blocked carotid arteries in the neck. They treat the problems of the aorta (a large main artery) after it leaves the heart and enters the abdomen.'),
(42, 'Veterinarian ', '', 'Veterinarian is a doctor who gives medical treatment to animals'),
(43, 'Acupuncture Specialist', '', 'A person trained in acupuncture (therapy that uses thin needles inserted through the skin at specific points on the body to control pain and other symptoms). Acupuncture is a type of complementary and alternative medicine.'),
(44, 'Audiologists ', '', 'Audiologists are health care professionals who identify, assess and manage disorders of hearing, balance and other neural systems'),
(45, 'Ayurvedic Practitioner', '', 'Ayurvedic Practitioner: Ayurvedic professionals with additional training in pathology and disease management beyond that of the AHC. These professionals also practice preventive healthcare and health promotion, using diet and lifestyle.'),
(46, 'Chiropractor ', '', 'A chiropractor treats many conditions affecting the nervous system and musculoskeletal system. Think of a chiropractor as a doctor who cares for any kind of muscle, bone or joint pain or dysfunction. The most common reasons for a chiropractic adjustment include: Lower back pain'),
(47, 'Diagnostician ', '', 'Diagnostician is a person who specializes in making diagnoses, especially of medical cases.'),
(48, 'Homeopathy ', '', 'Homeopathy is generally based on two main principles: that a substance that causes symptoms in a healthy person can be used in diluted form to treat symptoms and illnesses, a principle known as “like-cures-like”; and. the more diluted the substance, the more potent it is, which is known as the “law of infinitesimals'),
(49, 'Microbiologists ', '', 'Microbiologists study the growth and characteristics of microscopic organisms such as viruses.'),
(50, 'Naturopathic Doctor', '', 'A naturopathic doctor can use physical assessments, laboratory tests, medical imaging, and medical history examinations to diagnose a health problem. After diagnosis, they will establish ways to prevent and treat the health problem by working with the natural healing systems within the body.'),
(51, 'Nutritionists ', '', 'Nutritionists counsel clients on nutrition issues and healthy eating habits. Nutritionists are experts in the use of food and nutrition to promote health and manage disease. They plan and conduct food service or nutritional programs to help people lead healthy lives'),
(52, 'Pharmacist', '', 'A pharmacist is a healthcare professional who is specifically trained to store, handle, prepare, and dispense various medications. They play an essential role in educating patients about using or administering their medication\r\nWhat does a physiotherapist do?\r\nPhysiotherapists help people affected by injury, illness or disability through movement and exercise, manual therapy, education and advice. They maintain health for people of all ages, helping patients to manage pain and prevent disease.\r\n'),
(53, 'Massage Therapy', '', 'In massage therapy, a trained, certified medical professional (massage therapist) manipulates the soft tissues of your body — muscle, connective tissue, tendons, ligaments and skin. The massage therapist uses varying degrees of pressure and movement. Massage is generally considered part of integrative medicine');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `login_user_index` int(255) NOT NULL,
  `contact_index` int(255) NOT NULL,
  `contact_firstname` varchar(255) NOT NULL,
  `contact_lastname` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_description` text NOT NULL,
  `contact_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dr_index` int(255) NOT NULL,
  `dr_name` varchar(255) NOT NULL,
  `dr_phone` varchar(255) NOT NULL,
  `dr_email` varchar(255) NOT NULL,
  `dr_education` varchar(255) NOT NULL,
  `dr_category` varchar(255) NOT NULL,
  `dr_location` varchar(255) NOT NULL,
  `dr_sublocation` varchar(255) NOT NULL,
  `dr_working_time` varchar(255) NOT NULL,
  `dr_hospital_name` varchar(255) NOT NULL,
  `dr_hospital_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_index`, `dr_name`, `dr_phone`, `dr_email`, `dr_education`, `dr_category`, `dr_location`, `dr_sublocation`, `dr_working_time`, `dr_hospital_name`, `dr_hospital_address`) VALUES
(1, 'Dr. Umesh V. Kapuskar', '8976528148', 'kynmmh@gmail.com', 'mbbs', 'physician\r\n', 'Mumbai', 'Kalyan', '12:00 a.m.\r\n   -\r\n3:00 p.m.\r\n', 'Shree Tisai Hospital', '1st floor, Vivaan Heights, Opp Prasad Hotel, Pune Link Road, Tisgaon Naka, Kalyan(east) 421306.'),
(2, 'Dr. Niloofer Balsara', '9820065059', 'n_balsara@hotmail.com', 'Master of Arts (Psychology)', 'psychiatry', 'Mumbai', '', '11:00 a.m.\r\n   -\r\n8:00 p.m.', 'Clinical Psychology', '406, Doctor Centre\r\n135 Kemps Corner\r\nMumbai'),
(3, 'Dr. Pervin Dadachanji', '9820001939', 'pdadachanji@hotmail.com', 'M.D. Psychiatry (8 Years after 12th Grade Exams)', 'psychiatry', 'Mumbai', '', '9:00 a.m.\r\n   -\r\n2:00 p.m.', 'R.N.Gamadia Polyclinic', 'Gamadia Colony, Tardeo\r\nMumbai 400001'),
(4, 'Dr. Sunay Pradhan', '9821359650', 'sunay67@rediffmail.com', 'MD, DPM, MBBS', 'psychiatry', 'Mumbai', '', '10:00 a.m.\r\n   -\r\n1:00 p.m', 'Masina Hospital/Byculla Clinic:', '\r\n7, Kailas Darshan, Gamdevi'),
(5, 'Dr. Vihang Vahia', '22612596', 'vvahia@hotmail.com', 'MD MBBS', 'psychiatry', 'Mumbai', '', '9:30 a.m.\r\n   -\r\n11:30 p.m', 'Lilavati Hospital', '261 D.N. Road\r\nFort , Mumbai 400001'),
(6, 'Dr. Ankita Asher', '98203413786', 'ankitaphysio@yahoo.com', 'B.P. Th (Bachelor of Physiotheraphy)', 'cardiology', 'Mumbai', 'Tilak Nagar', '9:00 a.m.\r\n   -\r\n6:00 p.m.', 'Cardiovascular and Respiratory Physiotherapy and Rehabilitation', 'Plot No. 122, Bhakti Heights, flat no. 1103, 089\r\n11th Floor, A1 wing, Opp. ICICI Bank, Near\r\nShahkar Cinema, Tilak Nagar, Mumbai - 400'),
(7, 'Jamshed J. Dalal', '9821012409', 'jjdalal@hotmail.com', 'MBBS, MD(Med), DM(Card), PHD (UK)', 'cardiology', 'Mumbai', 'Andheri', '10:00 a.m.\r\n   -\r\n6:00 p.m.', 'Cardiology, Kokilaben Dhirubhai Ambani Hospital', 'Four Bungalows, Andheri West Mumbai 400053'),
(8, 'Dr. Anne Kumar', '9820473842', 'ganesh.kumar@hiranandanihospital.org', 'MB., BS, MD ( Internal Medicine), DM Cardiology', 'cardiologist', 'Mumbai', '', '8:00 a.m.\r\n   -\r\n2:00 p.m.', 'Dr LH Hiranandani Hospital', 'Interventional apartment Dept of barony\r\nMumbai'),
(9, 'Dr. Arun A Mehta', '8806151193', 'arunmehta2000@rediffmail.com', 'American Board Of Internal Medicine,\r\nAmerican Board Of Cardiology', 'cardiology', 'Pune', '', '10:00 a.m.\r\n   -\r\n5:00 p.m.', 'Jehangir Hospital', 'Panel Consultant, Ruby Hall\r\nInamdar nagar, Noble Polyclinic, agarpatta city, Pune'),
(10, 'Dr. Firdaus Bativala', '235241712', 'soonifid@gmail.com', 'DDS, Columbia, 1986 BDS, Bombay, 1981', 'dentistry', 'Mumbai', '', '3:00 p.m.\r\n   -\r\n7:00 p.m.', '104 Sagar Mansion', '40 B. Desai Road\r\nMumbai, 400026'),
(11, 'Dr. Ashok Karad', '2643167071', 'drashokkarad@gmail.com', 'BDS, MDS, M Orth, RCS(Edin). Graduate in Professional Photography(USA)', 'dentists', 'Mumbai', 'Bandra', '9:00 a.m.\r\n   -\r\n 6:30 p.m.', 'Smile Care Clinic Pvt. Ltd', '1/C,3-3,2,Sujata Niwas,\r\nS.V.Road, Bandra (West), Mumbai-400 050'),
(12, 'Dr. Saiesha K. Mistry', '23840399', 'dr.mistry.clinic@gmail.com', 'BDS, MSC, Diploma in Aesthetic Dentistry (USA)', 'dentist', 'Mumbai', '', '10:30 a.m.\r\n   -\r\n8:00 p.m.', 'Restorative and Aesthetic Dentist', 'India House No. 2, Mezzanine floor\r\nKemps Corner\r\nMumbai 400036'),
(13, 'Dr. Ratnadeep Patil', '2643167071', 'ratnadeeppatil@gmail.com', 'BDS, PHD (Implants)', 'dentist', 'Mumbai', 'Bandra', '9:00 a.m.\r\n   -\r\n7:00 p.m.', 'Smilecare India clinic', '13, Geetanjali, 234, S.V. Road,\r\nBandra (west)'),
(14, 'Dr. Rohit Sharma', '9820130820', 'dentalinnovations@gmail.com', 'Post graduate certified from New York University college of dentistry\r\nBachelor of Dental surgery, post graduate in cosmetic and aesthetic dentistry', 'dentist', 'Mumbai', 'Khar', '10:00 a.m.\r\n    -\r\n 8:00 p.m.', 'Comprehensive dentistry', '102 Leo, A Wing, 1st floor\r\n24th Road, Off linking Road, Khar West\r\nMumbai 400052'),
(15, 'Dr. Preeti Sharma', '9820142742', 'dentalinnovations001@gmail.com', 'Bachelor of dental surgery Post Graduate in cosmetic and aesthetic dentistry', 'dentist', 'Mumbai', 'Khar', '10:00 a.m. \r\n    -\r\n 8:00 p.m.', 'Dental Innovations', '102 Leo, A Wing, 1st floor\r\n24th Road, Off linking road, Khar west'),
(16, 'Dr. Krutee Vora', '9930166733', 'dr_krutee@yahoo.com', 'BDS, Mumbai', 'dentist', 'Mumbai', 'Ghatkopar', '10:00 a.m.\r\n    -\r\n 1:00 p.m.', 'Vora Clinic', 'Shop#6, 186, Ratan Palace\r\nGarodia Nagar, Ghatkopar East\r\nMumbai 400077'),
(17, 'Dr. Porus Turner', '9820335764', 'turnerdent@hotmail.com', ' BDS, MDS, MSC, Oral Implantology', 'dentist', 'Mumbai', 'Khar', '9:00 a.m.\r\n   -\r\n7:00 p.m.', 'R.N. Gamadia Polyclinic', 'Gamadia Colony Road, Tardeo, Mumbai 400007\r\nRamakrishna Chambers, Khar Linking Road, Above Reebok Showroom, Khar, mumbai'),
(18, 'Dr. Ashdin Turner', '9820355578', 'turnerdent001@hotmail.com', 'BDS, MDS, MSC, Oral implantology', 'dentist', 'Mumbai', 'Khar', '9:00 a.m. \r\n   -\r\n7:00 p.m.', 'R.N. Gamadia Polyclinic', 'Gamadia Colony Road, Tardeo, Mumbai 400007\r\nRamakrishna Chambers, Khar Linking Road, Above Reebok Showroom, Khar, Mumbai'),
(19, 'Dr. Keki Mistry', '23865753', 'keki.mistry@gmail.com', ' BDS(BOM) 1959, MDS {ILL. USA)1960, MDSc (UK) 1982,', 'dentist', 'Mumbai', '', '9:00 a.m.\r\n   -\r\n7:00 p.m.', 'Dental Specialty Clinic', 'India House No2, Mezzanine Floor\r\nKemps Corner\r\nMumbai 400036'),
(20, 'Dr. Mahesh Balsekar', '23694635', 'mbalsekar@hotmail.com', 'MD DCH, 1983', 'pediatrics', 'Mumbai', '', '9:00 a.m. \r\n   -\r\n6:00 p.m.', 'Mumbai Mutal Terrace', '4th Floor, Opera House, Mumbai 400007'),
(21, 'Dr. Bijal Shrivastava', '25763208', 'rajukhubchandani@yahoo.com', 'MD', 'pediatrics', 'Mumbai', '', '9:00 a.m.\r\n   -\r\n8:00 p.m.', 'Hiranandani Hospital', 'Consulting Rooms: 31 kailas Darsnana\r\nNana Chowk, kennedy bridge\r\nMumbai - 400001'),
(21, 'Dr. Burjor Banaji', '2207 4744', 'bbanaji@gmail.com', 'MS, MRC, DO', 'Ophthalmology', 'Mumbai', 'Fort', '10:00 a.m.\r\n   -\r\n7:00 p.m.', 'Mumbai', 'Navsari Building 4 Floor 240 Dr. D. N. Road Fort, Mumbai 400001'),
(22, 'Dr. Anand A Shroff', '66949880', 'anand@shroffeye.org', 'MBBS, MS,FICS', 'Ophtalmologist ', 'Bandra West', 'Marine Drive', '8:00 a.m. \r\n   -\r\n7:00 p.m.', 'shroff eye hospital', 'Shroff Eye Clinic, 86B Gobind Mahal, Netaji Subhash Road, Marine Drive, Mumbai 400002 '),
(23, 'Dr. Ashok Shroff', '66949880', 'info@shroffeye.org', 'MBBS, MS, DOMS', 'Ophtalmologist', 'Bandra West', 'Marine Drive', '8:00 a.m. \r\n   -\r\n7:00 p.m.', 'Shroff Eye Hospital', '222, S.V. Road, Behind Shoppers Stop, Bandra West, Mumbai 400050'),
(24, 'Dr. Rahul Shrof', '66949880', 'rahul@shroffeye.org', 'MBBS MS, FMRF', 'Ophthalmology', 'Bandra West', 'Marine Drive', '8:00 a.m. \r\n   -\r\n7:00 p.m.', 'Shroff Eye Hospital', '222, S.V. Road, Behind Shoppers stop, Bandra West, Mumbai 400050'),
(25, 'Dr. Pavitra Bhat', '25763219', 'pavitra.bhat@hiranandanihospital.org', 'FRCS, DNB, FCPS, DO, DOMS, FICO, MBBS', 'Ophthalmology', 'Mumbai', '', '9:00 a.m. \r\n   -\r\n7:00 p.m.', 'hiran and ani hospital', '4WC8+8HH, Hiranandani Gardens, BSNL Colony, Powai, Mumbai, Maharashtra 400076'),
(26, 'Dr. Parag Sancheti', '25530333', 'parag@sanchetihospital.org', 'MBBS, MS, DNB, F.ASIF, M.CH', 'Orthopedics', 'Pune', '', '9:00 a.m. \r\n   -\r\n6:00 p.m.', 'sancheti hospital', 'Joint replacement, arthroscopy & sports medicine Sancheti Institute for Orthopaedics& Rehabilitation, 16, Shivajinagar, Pune 411005'),
(27, 'Dr. Darius Soonawalla', '23610291', 'soonawalla@gmail.com', 'MBBS DORTH, DNBE, FRCS', 'Orthopedic surgery', 'Mumbai', '', '3:30 p.m. \r\n   -\r\n8:30 p.m.', 'Happy Joints hospital', '22A Empire Estates August Kranti Road, Kemps Corner Mumbai 400036'),
(28, 'Dr. Maya Lulla', '9820144644', 'dr_maya_lulla@rediffmail.com', 'M.D.,F.C.P.S. D.G.O., M.I.A.C', 'Gynecology', 'VIle parle', 'Mumbai', '5:00 p.m. \r\n   -\r\n7:00 p.m.', 'Balabhai Nanavati Hospital', 'Consultant Obstetrician & Gynaecologist with special interest in Colposcopy & Cytology, Balabhai Nanavati Hospital,Vile Parle ,Mumbai 400056.'),
(29, 'Dr. Vanita Raut', '9819155390', 'vanita.raut@hiranandanihospital.org', 'MBBS DGO, MD', 'Obstetrics', 'Powai', 'Mumbai', '9:00 a.m. \r\n   -\r\n8:00 p.m.', '.hiran and ani hospital', 'Obstetrics and gynecology G/504, Powai Park Near Hiranandani Gardens, Powai Mumbai 76'),
(30, 'Dr. Goolu Cursetji Nagarwala', '9820074875', 'vanita.raut@hiranandanihospital.org', 'MBBS', 'Gynaecologist', 'Mumbai', '', '9:00 a.m. \r\n   -\r\n7:00 p.m.', 'Breach Candy Hospital', 'Gynaecologist OPD Breach Candy Hospital Breach Candy Mumbai 400026'),
(31, 'Dr. Duru Shah', '2223802584', 'durushah@gmail.com', 'MBBS', 'Obstetrician', 'Mumbai', '', '9:00 a.m. \r\n   -\r\n9:00 p.m.', 'Gynaec Hospital', 'Obstetrician, gynaecologist, infertility specialist, womens healthGynaecworld, kwality House, above chinese room, kemps corner Mumbai 400026'),
(32, 'Dr. Rustom Soonawalla', '2223538942', 'soonawalaclinic@hotmail.com', 'MBBS, MD, FRCS, FRCOG, FICOG', 'gynaecologist', 'Peddar Road', 'Mumbai', '9:30 a.m. \r\n   -\r\n8:00 p.m.', 'Soonawala Clinic', 'Soonawala Clinic,5 Pashmina, Peddar Road, Mumbai 400 026'),
(33, 'Dr. Anahita Pandole', '9820130284', 'apandole@hotmail.com', 'MD, MBBS, DNB, FCPS, DGO', 'Obstetrician', 'Peddar Road', 'Byculla', '8:00 a.m. \r\n   -\r\n4:00 p.m.', 'Masina Hospita', 'Jaslok Hospital & Research Centre, Peddar Road, Mumbai 400026'),
(34, 'Dr. Geeta Pandya', '9821219032', 'geeta_pandya@hotmail.com', 'MBBS, D.Obst RCOG, CFP, MRCOG, FRCOG', 'Endocrinology', 'Pedder Road', 'Mumbai', '11:30 a.m. \r\n   -\r\n7:00 p.m.', 'Jaslok Hospital', 'Navroze Apartment, Bhulabhai Desai Road, Mumbai 400026 ,Jaslok Hospital, Pedder Road, Mumba'),
(35, 'Dr. Sharukh Pavri', '9820156013', 'doctor@pavri.net', 'M. S. B. H.', 'Homeopathy', 'Mumbai', 'Tardeo', '9:30 a.m. \r\n   -\r\n11:00 a.m.', 'Kappawala Hospital', 'S S Kappawala Agiari Annexe Sir Ratan Tata Road, Tardeo Mumbai 400034'),
(36, 'Dr. Farokh Master', '23806599', 'www.drfarokhmaster.com', 'MBBS', 'Homoeopathy', 'Mumbai', 'Hughes Road', '10:00 a.m. \r\n   -\r\n2:00 p.m.', 'Dr.Farokh Master Hospital', 'Homoeopathy especially for advanced pathology and seriously ill patients, Vatcha Gandhy Bldg. No.1, Hughes Road, Mumbai 400007'),
(37, 'Dr. Satish Gala', '267129999', 'drsatishgala@gmail.com', 'BHMS- 1991 M.D. 2000', 'Consulting Homoeopathic Physician', 'Mumbai', 'Vile parle', '10:00 a.m. \r\n   -\r\n1:00 p.m.', ' Dr. satish Gala Hospital', '2, ARIF MANSION, 1 ST FLOOR OPP PRIME MALL, IRLA SOCIETY ROAD VILE PARLE WEST MUMBAI-400056'),
(38, 'Dr. Naresh Himthani', '9898570535', 'drnareshhimthani@yahoo.co.in', 'M.B.B.S in 1988 M.D. in 1997', 'Internal Medicine', 'Ahmedabad', 'Gujarat', '9:00 a.m. \r\n   -\r\n5:00 p.m.', 'Dr. Naresh Himthani Hospital', 'Internal Medicine A-247 Sardarnagar Ahmedabad Gujarat'),
(39, 'Dr. Chirag Joshi', '9898111515', 'c.joshi2020@gmail.com', 'MBBS MD', 'Internal Medicine', 'Ahmedabad', 'Gujarat', '8:00 a.m. \r\n   -\r\n6:00 p.m.', 'Shrey Hospital', 'Shrey Hospital Ltd, Near Amco Bank Pnujabi Hell Lane, Naarraenjpune Ahmedabad'),
(40, 'Dr. Vimal J. Pahuja', '25763300', 'vimal.pahuja@hiranandanihospital.org', 'MBBS', 'Internal Medicine', 'Mumbai', 'Powai', '8:00 a.m. \r\n   -\r\n8:00 p.m.', 'Dr. L.H. Hiranandani Hospital', 'Dr. L.H. Hiranandani Hospital, Hillside ave, Hiranandani gardens, Powai Mumbai 400076'),
(41, 'Dr. Darshana Rathod', '9820676745', 'darshana.rathod@hotmail.com', 'MBBS MD', 'MD internal medicine', 'Mumbai', 'Malad West', '9:00 a.m. \r\n   -\r\n6:00 p.m.', 'Dr. Darshana Rathod Hospital', 'E/138, Miraaj Residency, Jankalyan Nagar Off Marve Road, Malad West ,Mumbai 400095'),
(42, 'Dr. Sangeeta Rewatkar', '9898065635', 'drsangeetarewatkar@yahoo.com', 'MBBS, MD', 'Internal medicine', 'Ahmedabad', 'Mumbai', '8:00 a.m. \r\n   -\r\n4:30 p.m.', 'Dr. Sangeeta Rewatkar Hospital', 'B1/201, Spring Park, Nr. Heaven Park, B/H Sharanam, Ramedvnagar, Satellite, Ahmedabad 380015 ,Apollo Hospitals International Ltd., Ahmedabad'),
(43, 'Dr. Apratim Goel', '9833889680', 'mdcutis@hotmail.com', 'MBBS  6 YEARS, MD  3 YEARS, DNB 2 YEARS', 'Dermatology', 'Bandra', 'Mumbai', '9:00 a.m. \r\n   -\r\n7:00 p.m.', 'Dr. Apratim Goel Hospital', 'BANDRA : NAMDAR HOUSE GROUND FLOOR, OPP BANDRA POLICE STATION 89, HILL ROAD, BANDRA WEST, MUMBAI-400050'),
(44, 'Dr. Nina Madnani', '9821019088', ' ninamadnani@gmail.com', 'MBBS 1979 DVD, MD 1982', 'Dermatology', 'Mumbai', 'Cobala', '10:00 a.m. \r\n   -\r\n2:00 p.m.', 'Hinduja Hospital', 'D-2-0, ground floor, Connaught Mansion, Opp. Colaba post Office, behind Bombay Baptist Church,Colaba, Mumbai 400005'),
(45, 'Dr. Rui Joseph Fernandez', '26425959', 'armada_fernandez@yahoo.com', 'MD, DVD, DDV; 46 years of experience', 'Dermatologist', 'Bandra', 'Mumbai', '9:00 a.m. \r\n   -\r\n12:30 p.m.', 'Dr. Rui Joseph Fernandez Hospital', 'Jain Chambers, 1st Floor Junction of SV Road and Bandra Station Road Bandra West'),
(46, 'Dr. Asad Lakhani', '9820063656', 'draalakhani@gmail.com', 'MD', 'General Physician', 'Mumbai', 'Bandra', '10:00 a.m. \r\n   -\r\n6:00 p.m.', 'Family Physician Doctors Centre', 'Family Physician Doctors Centre, 3rd Floor Hill N Dale Building 160 Hill Road, Bandra (w). Mumbai 400 050.'),
(47, 'Dr. Ashish Sawkar', '9820347732', 'ashishsawkar@gmail.com', 'MBBS', 'General Physician', 'Mumbai', 'Forjett Hill Road', '10:00 a.m. \r\n   -\r\n1:00 p.m.', 'Dr. Ashish Sawkar clinic', 'Family physician 172/3, Enterprise Apts Forjett Hill Road Mumbai 400036'),
(48, 'Dr. Rohit Barman', '9820042042', 'drbarman@vsnl.net', 'C, MBBS, VQE,FMGEMS (USA)', 'General Physician', 'Mumbai', 'Pedder Road', '4:30 p.m. \r\n   -\r\n7:00 p.m.', 'Doctor House', '202, Doctor House Pedder Road Mumbai - 400 026'),
(49, 'Dr. Porus Kapadia', '23711060', 'drporus.@hotmail.com', 'M.B.B.S F.C.G.P', 'General Physician', 'Mumbai', 'Byculla', '11:00 a.m. \r\n   -\r\n1:00 p.m.', 'Dr. Porus Kapadia clinic', 'Kavarana Terrace, Opp Gloria Church Dr B Ambedkar Road. Byculla Mumbai 400027'),
(50, 'Dr. Farhad Kapadia', '9821031643', 'fnkapadia@gmail.com', '1999 FRCP, 1991 EDIC 1986 MD, 1982, MBBS', 'Consultant Intensivist', 'Mumbai', 'Kranti Marg', '10:30 a.m. \r\n   -\r\n7:30 p.m.', 'Dr. Farhad Kapadia clinic', '72, B August Kranti Marg, Mumbai 400036'),
(51, 'Dr. Meenal Jain', '9898010780', 'meenalg@apolloahd.com', 'MBBS graduated in 1998', 'MBBS', 'Mumbai', 'Bhat', '10:00 a.m. \r\n   -\r\n6:00 p.m.', 'Apollo Hospitals', 'Apollo Hospitals International LTD PLOT NO 1A, BHAT'),
(52, 'Dr. Kaiomarz Balsara', '9619268376', 'malafarhad@gmail.com', 'MBBS, M.D. (Medicine), MRCP (U.K.)', 'Rheumatology', 'Mumbai', 'Kemps Corner', '9:30 a.m. \r\n   -\r\n7:00 p.m.', 'Dr. Mala Bhambhani Hospital', 'Cornelian Building 1st Floor, 10 Kemps Corner Mumbai - 400 036'),
(53, 'Dr. Samir Bhargava', '9820055743', 'drsamirbhargava@yahoo.co.in', 'D.L.O.(London) , M.S. (E.N.T.), D.N.B., D.O.R.L., M.B.B.S., 21 Years of post graduate experience', 'THROAT SURGEON', 'Mumbai', 'Santacruz ', '9:00 a.m. \r\n   -\r\n8:00 p.m.', 'Dr. Samir Bhargava Hospital', 'Gopal Bhuvan, Tagore Road Santacruz (W)Mumbai 400054'),
(54, 'Dr. Nishit Shah (ENT)', '23516830', 'malafarhad@gmail.com', 'MS, DNB, DORL', 'MBBS', 'Mumbai', 'Kemps Corner', '5:00 a.m. \r\n   -\r\n8:00 p.m.', 'Dr. Nishit Shah Hospital', 'India House No. 2, Second flr, Kemps Corner, Mumbai 400036 Bombay Hospital, Room No. 113, 1st flr, New Wing, New Marine Lines, Mumbai 400020'),
(55, 'Dr. Manoj Chadha', '9821548346', 'mchadha59@gmail.com', 'MBBS, MD, DM', 'Endocrinology', 'Navi Mumbai', 'Vashi', '9:00 a.m. \r\n   -\r\n7:00 p.m.', 'Dr. Manoj Chadha Hospital', '106, Basera, Sector 17 Vashi, Navi Mumbai 400703'),
(56, 'Dr. Hermraj Chandalia', '9820470700', 'denmarc100@rediffmail.com', 'M.D', 'Diabetology', 'Mathew Road', 'Mumbai', '3:00 a.m. \r\n   -\r\n8:00 p.m.', 'Jaslok Hospital', '18, Kala Bhavan 3, Mathew Road, Behind Opera House, Mumbai - 400004'),
(57, 'Dr. Nitin Chaubal', '9619072238', 'thaneultrasound@gmail.com', 'DMRD (1983), MD(1984)', 'Radiology- Sonograph', 'Talaopali', 'Thane', '7:30 a.m. \r\n   -\r\n8:00 p.m.', 'Jaslok Hospital', 'Jaslok Hospital & Research Centre. 15 - Dr. Deshmukh Marg, Pedder Road, Mumbai- 400 026'),
(58, 'Dr. Jyoti Chaubal', '25391717', 'thaneultrasound@gmail.com', 'MD(1985) DMRE (2003), RDMS, RVT (USA)', 'Radiology-Sonography', 'Talaopali', 'Thane', '7:30 a.m. \r\n   -\r\n8:00 p.m.', 'Jaslok Hospital', 'Thane Ultrasound Centre Shanti Niwas, Dr Moose Road, Talaopali Thane (W) 400601'),
(59, 'Dr. Sorab Jimmy Sidhva', '9820068912', 'drsjsidhva@gmail.com', 'MD DMRD, MBBS, HSC, ICSE', 'Ultrasonologist', 'Mumbai', 'Fort', '9:30 a.m. \r\n   -\r\n6:00 p.m.', 'Dr. Sorab Jimmy Sidhva Hospital', 'Sidhva Xray clinic, Thomas Cook Building D.N.Road, Fort Mumbai 400001'),
(60, 'Dr. Vernon Patrick Desa', '9819443455', 'vdesa82@gmail.com', 'M.B.B.S, D.C.H, D.H.A, M.R.S.H ', 'MBBS', 'Karva Marg', 'Mumbai', '9:00 a.m. \r\n   -\r\n8:00 p.m.', 'Saifee Hospital', 'Medical Administrator and Medical Risk Management Advisor Saifee Hospital, 15/17 Maharshi Karve Marg Mumbai 400 004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_index`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Sr No`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Sr No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_index` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
