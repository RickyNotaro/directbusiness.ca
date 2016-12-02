-- phpMyAdmin SQL Dump
-- version 4.7.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2016 at 08:11 AM
-- Server version: 5.5.52-0+deb8u1
-- PHP Version: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pma00011`
--

use pma00011;

-- --------------------------------------------------------

--
-- Table structure for table `activity_areas`
--

CREATE TABLE `activity_areas` (
    `id` int(11) NOT NULL,
    `activityArea` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity_areas`
--



-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
    `id` int(11) NOT NULL,
    `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `apartment` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
    `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `postalCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `state_province_id` int(11) NOT NULL,
    `candidate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applys`
--

CREATE TABLE `applys` (
    `id` int(11) NOT NULL,
    `file_id` int(11) NULL,
    `cv_id` int(11) NULL,
    `job_id` int(11) NOT NULL,
    `candidate_id` int(11) NOT NULL,
    `cover_letter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
    `id` int(11) NOT NULL,
    `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `views` int(11) NOT NULL DEFAULT '0',
    `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidates_phones`
--

CREATE TABLE `candidates_phones` (
    `id` int(11) NOT NULL,
    `phone_id` int(11) NOT NULL,
    `candidate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `can_work_fors`
--

CREATE TABLE `can_work_fors` (
    `id` int(11) NOT NULL,
    `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `can_work_fors`
--



-- --------------------------------------------------------

--
-- Table structure for table `career_levels`
--

CREATE TABLE `career_levels` (
    `id` int(11) NOT NULL,
    `careerLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career_levels`
--



-- --------------------------------------------------------

--
-- Table structure for table `country_regions`
--

CREATE TABLE `country_regions` (
    `id` int(11) NOT NULL,
    `countryRegion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cover_letters`
--

CREATE TABLE `cover_letters` (
    `id` int(11) NOT NULL,
    `coverLetterName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `TEXT` text COLLATE utf8_unicode_ci NOT NULL,
    `cover_letter_model_id` int(11) NOT NULL,
    `candidate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cover_letter_models`
--

CREATE TABLE `cover_letter_models` (
    `id` int(11) NOT NULL,
    `coverLetterModelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `TEXT` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cover_letter_models`
--



-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
    `id` int(11) NOT NULL,
    `cvName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `position_sought` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `minimum_wage` decimal(2,2) NOT NULL,
    `maximum_wage` decimal(2,2) NOT NULL,
    `position_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `current_employer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `ready_to_relocate` tinyint(1) NOT NULL,
    `start_date` date NOT NULL,
    `career_level_id` int(11) NOT NULL,
    `employment_status_id` int(11) NOT NULL,
    `activity_area_id` int(11) NOT NULL,
    `profession_id` int(11) NOT NULL,
    `education_level_id` int(11) NOT NULL,
    `ready_to_travel_id` int(11) NOT NULL,
    `can_work_for_id` int(11) NOT NULL,
    `candidate_id` int(11) NOT NULL,
    `cv_visibility_id` int(11) NOT NULL,
    `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvs_language_levels_languages`
--

CREATE TABLE `cvs_language_levels_languages` (
    `id` int(11) NOT NULL,
    `cv_id` int(11) NOT NULL,
    `language_level_id` int(11) NOT NULL,
    `langage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvs_skill_cards`
--

CREATE TABLE `cvs_skill_cards` (
    `id` int(11) NOT NULL,
    `cv_id` int(11) NOT NULL,
    `skill_card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvs_working_licences`
--

CREATE TABLE `cvs_working_licences` (
    `id` int(11) NOT NULL,
    `cv_id` int(11) NOT NULL,
    `working_licence_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cv_visibilities`
--

CREATE TABLE `cv_visibilities` (
    `id` int(11) NOT NULL,
    `visibilityName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cv_visibilities`
--



-- --------------------------------------------------------

--
-- Table structure for table `education_levels`
--

CREATE TABLE `education_levels` (
    `id` int(11) NOT NULL,
    `educationLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education_levels`
--



-- --------------------------------------------------------

--
-- Table structure for table `employment_statuses`
--

CREATE TABLE `employment_statuses` (
    `id` int(11) NOT NULL,
    `employmentStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employment_statuses`
--



-- --------------------------------------------------------

--
-- Table structure for table `enterprises`
--

CREATE TABLE `enterprises` (
    `id` int(11) NOT NULL,
    `enterpriseName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `history` text COLLATE utf8_unicode_ci NOT NULL,
    `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `culture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `description` longtext COLLATE utf8_unicode_ci NOT NULL,
    `activity_area_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
    `id` int(11) NOT NULL,
    `fileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `candidate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
    `id` int(11) NOT NULL,
    `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `description` text COLLATE utf8_unicode_ci NOT NULL,
    `responsibility` text COLLATE utf8_unicode_ci NOT NULL,
    `aptitude` text COLLATE utf8_unicode_ci NOT NULL,
    `requirement` text COLLATE utf8_unicode_ci NOT NULL,
    `asset` text COLLATE utf8_unicode_ci NOT NULL,
    `note` text COLLATE utf8_unicode_ci NOT NULL,
    `start_date` date NOT NULL,
    `activity_area_id` int(11) NOT NULL,
    `profession_id` int(11) NOT NULL,
    `employment_status_id` int(11) NOT NULL,
    `start_date_publication` timestamp NULL DEFAULT NULL,
    `end_date_publication` timestamp NULL DEFAULT NULL,
    `created_date` timestamp NULL DEFAULT NULL,
    `status_id` int(11) NOT NULL,
    `education_level_id` int(11) NOT NULL,
    `skill_level_id` int(11) NOT NULL,
    `job_type_id` int(11) NOT NULL,
    `enterprise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
    `id` int(11) NOT NULL,
    `jobType` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_types`
--



-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
    `id` int(11) NOT NULL,
    `languageName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--



-- --------------------------------------------------------

--
-- Table structure for table `language_levels`
--

CREATE TABLE `language_levels` (
    `id` int(11) NOT NULL,
    `languageLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_levels`
--



-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
    `id` int(11) NOT NULL,
    `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `phone_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone_types`
--

CREATE TABLE `phone_types` (
    `id` int(11) NOT NULL,
    `phoneType` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phone_types`
--



-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
    `id` int(11) NOT NULL,
    `professionName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `professions`
--



-- --------------------------------------------------------

--
-- Table structure for table `ready_to_travels`
--

CREATE TABLE `ready_to_travels` (
    `id` int(11) NOT NULL,
    `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ready_to_travels`
--



-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
    `id` int(11) NOT NULL,
    `roleName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--



-- --------------------------------------------------------

--
-- Table structure for table `skill_cards`
--

CREATE TABLE `skill_cards` (
    `id` int(11) NOT NULL,
    `skillCard` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill_cards`
--



-- --------------------------------------------------------

--
-- Table structure for table `skill_levels`
--

CREATE TABLE `skill_levels` (
    `id` int(11) NOT NULL,
    `skillLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill_levels`
--



-- --------------------------------------------------------

--
-- Table structure for table `state_provinces`
--

CREATE TABLE `state_provinces` (
    `id` int(11) NOT NULL,
    `stateProvince` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `country_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
    `id` int(11) NOT NULL,
    `statusName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--



-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `role_id` int(11) NOT NULL,
    `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `working_licences`
--

CREATE TABLE `working_licences` (
    `id` int(11) NOT NULL,
    `workingLicence` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `working_licences`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_areas`
--
ALTER TABLE `activity_areas`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `activity_areas1_UNIQUE` (`activityArea`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_addresses_state_provinces1_idx` (`state_province_id`),
ADD KEY `fk_addresses_candidates1_idx` (`candidate_id`);

--
-- Indexes for table `applys`
--
ALTER TABLE `applys`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_applys_files1_idx` (`file_id`),
ADD KEY `fk_applys_cvs1_idx` (`cv_id`),
ADD KEY `fk_applys_jobs1_idx` (`job_id`),
ADD KEY `fk_applys_candidates1_idx` (`candidate_id`),
ADD KEY `fk_applys_cover_letters1_idx` (`cover_letter_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `fk_candidates_users1_UNIQUE` (`user_id`);

--
-- Indexes for table `candidates_phones`
--
ALTER TABLE `candidates_phones`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `fk_candidates_phones_phones1_UNIQUE` (`phone_id`),
ADD KEY `fk_candidates_phones_candidates1_idx` (`candidate_id`);

--
-- Indexes for table `can_work_fors`
--
ALTER TABLE `can_work_fors`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `can_work_fors1_UNIQUE` (`description`);

--
-- Indexes for table `career_levels`
--
ALTER TABLE `career_levels`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `career_levels1_UNIQUE` (`careerLevel`);

--
-- Indexes for table `country_regions`
--
ALTER TABLE `country_regions`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_letters`
--
ALTER TABLE `cover_letters`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_cover_letters_cover_letter_models1_idx` (`cover_letter_model_id`),
ADD KEY `fk_cover_letters_candidates1_idx` (`candidate_id`);

--
-- Indexes for table `cover_letter_models`
--
ALTER TABLE `cover_letter_models`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `cover_letter_models1_UNIQUE` (`coverLetterModelName`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_cvs_career_levels1_idx` (`career_level_id`),
ADD KEY `fk_cvs_employment_status1_idx` (`employment_status_id`),
ADD KEY `fk_cvs_activity_areas1_idx` (`activity_area_id`),
ADD KEY `fk_cvs_professions1_idx` (`profession_id`),
ADD KEY `fk_cvs_education_levels1_idx` (`education_level_id`),
ADD KEY `fk_cvs_ready_to_travels1_idx` (`ready_to_travel_id`),
ADD KEY `fk_cvs_can_work_fors1_idx` (`can_work_for_id`),
ADD KEY `fk_cvs_candidates1_idx` (`candidate_id`),
ADD KEY `fk_cvs_cv_visibilities1_idx` (`cv_visibility_id`);

--
-- Indexes for table `cvs_language_levels_languages`
--
ALTER TABLE `cvs_language_levels_languages`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_cvs_language_levels_languages_cvs1_idx` (`cv_id`),
ADD KEY `fk_cvs_language_levels_languages_language_levels1_idx` (`language_level_id`),
ADD KEY `fk_cvs_language_levels_languages_languages1_idx` (`langage_id`);

--
-- Indexes for table `cvs_skill_cards`
--
ALTER TABLE `cvs_skill_cards`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_cvs_skill_cards_skill_cards1_idx` (`skill_card_id`),
ADD KEY `fk_cvs_skill_cards_cvs1_idx` (`cv_id`);

--
-- Indexes for table `cvs_working_licences`
--
ALTER TABLE `cvs_working_licences`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_cvs_working_licences_working_licences1_idx` (`working_licence_id`),
ADD KEY `fk_cvs_working_licences_cvs1_idx` (`cv_id`);

--
-- Indexes for table `cv_visibilities`
--
ALTER TABLE `cv_visibilities`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `cv_visibilities1_UNIQUE` (`visibilityName`);

--
-- Indexes for table `education_levels`
--
ALTER TABLE `education_levels`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `education_levels1_UNIQUE` (`educationLevel`);

--
-- Indexes for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `employment_statuses1_UNIQUE` (`employmentStatus`);

--
-- Indexes for table `enterprises`
--
ALTER TABLE `enterprises`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `fk_enterprises_users1_UNIQUE` (`user_id`),
ADD KEY `fk_enterprises_activity_areas1_idx` (`activity_area_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `files1_UNIQUE` (`path`),
ADD KEY `fk_files_candidates1_idx` (`candidate_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_jobs_activity_areas1_idx` (`activity_area_id`),
ADD KEY `fk_jobs_professions1_idx` (`profession_id`),
ADD KEY `fk_jobs_employment_statuses1_idx` (`employment_status_id`),
ADD KEY `fk_jobs_statuses1_idx` (`status_id`),
ADD KEY `fk_jobs_education_levels1_idx` (`education_level_id`),
ADD KEY `fk_jobs_skill_levels1_idx` (`skill_level_id`),
ADD KEY `fk_jobs_job_types1_idx` (`job_type_id`),
ADD KEY `fk_jobs_enterprises1_idx` (`enterprise_id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `job_types1_UNIQUE` (`jobType`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `languages1_UNIQUE` (`languageName`);

--
-- Indexes for table `language_levels`
--
ALTER TABLE `language_levels`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `language_levels1_UNIQUE` (`languageLevel`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_phones_phone_types1_idx` (`phone_type_id`);

--
-- Indexes for table `phone_types`
--
ALTER TABLE `phone_types`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `phone_types1_UNIQUE` (`phoneType`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `professions1_UNIQUE` (`professionName`);

--
-- Indexes for table `ready_to_travels`
--
ALTER TABLE `ready_to_travels`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `ready_to_travels1_UNIQUE` (`description`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `roles1_UNIQUE` (`roleName`);

--
-- Indexes for table `skill_cards`
--
ALTER TABLE `skill_cards`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `skill_cards1_UNIQUE` (`skillCard`);

--
-- Indexes for table `skill_levels`
--
ALTER TABLE `skill_levels`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `skill_levels1_UNIQUE` (`skillLevel`);

--
-- Indexes for table `state_provinces`
--
ALTER TABLE `state_provinces`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_state_provinces_country_regions1_idx` (`country_region_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `statuses1_UNIQUE` (`statusName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_users_roles1_idx` (`role_id`),
ADD KEY `fk_users_statuses1_idx` (`status_id`);

--
-- Indexes for table `working_licences`
--
ALTER TABLE `working_licences`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `working_licences1_UNIQUE` (`workingLicence`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_areas`
--
ALTER TABLE `activity_areas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applys`
--
ALTER TABLE `applys`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidates_phones`
--
ALTER TABLE `candidates_phones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `can_work_fors`
--
ALTER TABLE `can_work_fors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `career_levels`
--
ALTER TABLE `career_levels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `country_regions`
--
ALTER TABLE `country_regions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cover_letters`
--
ALTER TABLE `cover_letters`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cover_letter_models`
--
ALTER TABLE `cover_letter_models`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cvs_language_levels_languages`
--
ALTER TABLE `cvs_language_levels_languages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cvs_skill_cards`
--
ALTER TABLE `cvs_skill_cards`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cvs_working_licences`
--
ALTER TABLE `cvs_working_licences`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cv_visibilities`
--
ALTER TABLE `cv_visibilities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `education_levels`
--
ALTER TABLE `education_levels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `enterprises`
--
ALTER TABLE `enterprises`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `language_levels`
--
ALTER TABLE `language_levels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phone_types`
--
ALTER TABLE `phone_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `ready_to_travels`
--
ALTER TABLE `ready_to_travels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `skill_cards`
--
ALTER TABLE `skill_cards`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `skill_levels`
--
ALTER TABLE `skill_levels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `state_provinces`
--
ALTER TABLE `state_provinces`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `working_licences`
--
ALTER TABLE `working_licences`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
ADD CONSTRAINT `fk_addresses_state_provinces1` FOREIGN KEY (`state_province_id`) REFERENCES `state_provinces` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_addresses_candidates1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `applys`
--
ALTER TABLE `applys`
ADD CONSTRAINT `fk_applys_cvs1` FOREIGN KEY (`cv_id`) REFERENCES `cvs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_applys_jobs1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_applys_cover_letters1` FOREIGN KEY (`cover_letter_id`) REFERENCES `cover_letters` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_applys_candidates1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_applys_files1` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


--
-- Constraints for table 'Files'
--
ALTER TABLE `files`
ADD CONSTRAINT `fk_files_candidates1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
ADD CONSTRAINT `fk_candidates_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `candidates_phones`
--
ALTER TABLE `candidates_phones`
ADD CONSTRAINT `fk_candidates_phones_phones1` FOREIGN KEY (`phone_id`) REFERENCES `phones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_candidates_phones_candidates1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cover_letters`
--
ALTER TABLE `cover_letters`
ADD CONSTRAINT `fk_cover_letters_cover_letter_models1` FOREIGN KEY (`cover_letter_model_id`) REFERENCES `cover_letter_models` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cover_letters_candidates1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cvs`
--
ALTER TABLE `cvs`
ADD CONSTRAINT `fk_cvs_career_levels1` FOREIGN KEY (`career_level_id`) REFERENCES `career_levels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_employment_status1` FOREIGN KEY (`employment_status_id`) REFERENCES `employment_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_activity_areas1` FOREIGN KEY (`activity_area_id`) REFERENCES `activity_areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_professions1` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_education_levels1` FOREIGN KEY (`education_level_id`) REFERENCES `education_levels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_ready_to_travels1` FOREIGN KEY (`ready_to_travel_id`) REFERENCES `ready_to_travels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_can_work_fors1` FOREIGN KEY (`can_work_for_id`) REFERENCES `can_work_fors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_candidates1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_cv_visibilities1` FOREIGN KEY (`cv_visibility_id`) REFERENCES `cv_visibilities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cvs_language_levels_languages`
--
ALTER TABLE `cvs_language_levels_languages`
ADD CONSTRAINT `fk_cvs_language_levels_languages_cvs1` FOREIGN KEY (`cv_id`) REFERENCES `cvs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_language_levels_languages_language_levels1` FOREIGN KEY (`language_level_id`) REFERENCES `language_levels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_language_levels_languages_languages1` FOREIGN KEY (`langage_id`) REFERENCES `languages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cvs_skill_cards`
--
ALTER TABLE `cvs_skill_cards`
ADD CONSTRAINT `fk_cvs_skill_cards_skill_cards1` FOREIGN KEY (`cv_id`) REFERENCES `cvs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_skill_cards_cvs1` FOREIGN KEY (`skill_card_id`) REFERENCES `skill_cards` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cvs_working_licences`
--
ALTER TABLE `cvs_working_licences`
ADD CONSTRAINT `fk_cvs_working_licences_working_licences1` FOREIGN KEY (`cv_id`) REFERENCES `cvs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cvs_working_licences_cvs1` FOREIGN KEY (`working_licence_id`) REFERENCES `working_licences` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `enterprises`
--
ALTER TABLE `enterprises`
ADD CONSTRAINT `fk_enterprises_activity_areas1` FOREIGN KEY (`activity_area_id`) REFERENCES `activity_areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_enterprises_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
ADD CONSTRAINT `fk_jobs_activity_areas1` FOREIGN KEY (`activity_area_id`) REFERENCES `activity_areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_jobs_professions1` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_jobs_employment_status1` FOREIGN KEY (`employment_status_id`) REFERENCES `employment_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_jobs_statuses1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_jobs_education_levels1` FOREIGN KEY (`education_level_id`) REFERENCES `education_levels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_jobs_skill_levels1` FOREIGN KEY (`skill_level_id`) REFERENCES `skill_levels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_jobs_job_types1` FOREIGN KEY (`job_type_id`) REFERENCES `job_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_jobs_enterprises1` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprises` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
ADD CONSTRAINT `fk_phones_phone_types1` FOREIGN KEY (`phone_type_id`) REFERENCES `phone_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `state_provinces`
--
ALTER TABLE `state_provinces`
ADD CONSTRAINT `fk_state_provinces_country_regions1` FOREIGN KEY (`country_region_id`) REFERENCES `country_regions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `fk_users_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_statuses1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
