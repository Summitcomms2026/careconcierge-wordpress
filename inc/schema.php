<?php
/**
 * CareConcierge — JSON-LD schema (printed once into <head>).
 *
 * Builds a single @graph payload composed of the schema types that
 * accurately describe CareConcierge:
 *   - Organization (the company)
 *   - WebSite (the site)
 *   - WebPage (the surgeons / home page)
 *   - Service (the patient-communication-infrastructure service)
 *   - FAQPage (the visible accordion in section-03-solution.php)
 *   - DigitalDocument (the sample Conversion Intelligence Report PDF)
 *
 * Schema is deliberately scoped to the service, not the practice.
 * No medical schema types are used (no MedicalClinic, Physician,
 * Hospital, MedicalProcedure, MedicalBusiness, MedicalOrganization).
 * No clinical claims, no guaranteed results, no language implying
 * autonomous diagnosis or treatment recommendation.
 *
 * @package CareConcierge
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'CARECONCIERGE_CANONICAL_HOST' ) ) {
	define( 'CARECONCIERGE_CANONICAL_HOST', 'https://careconcierge.health' );
}

/**
 * Resolve the current vertical from the request URL.
 * Returns 'surgeons', 'dentists', or 'medical'. Defaults to surgeons
 * (the master) for the home page and any unrecognised URL — keeping
 * the schema graph stable for the canonical landing experience.
 */
if ( ! function_exists( 'careconcierge_schema_vertical' ) ) {
	function careconcierge_schema_vertical() {
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = '/' . trim( (string) $path, '/' );
		switch ( $path ) {
			case '/dentists':
			case '/dentists/':
				return 'dentists';
			case '/medical':
			case '/medical/':
				return 'medical';
			case '/surgeons':
			case '/surgeons/':
			case '/':
			default:
				return 'surgeons';
		}
	}
}

/**
 * Canonical FAQ source per vertical. Each list mirrors the visible
 * accordion in the corresponding section-03-solution pattern exactly
 * — the answer text below is verbatim from those rendered <p>
 * elements. If the visible copy is ever edited, update the matching
 * list here to keep schema and page in sync.
 *
 * @param string|null $vertical 'surgeons' | 'dentists' | 'medical'
 *                              (defaults to current request vertical).
 * @return array<int, array{question:string,answer:string}>
 */
if ( ! function_exists( 'careconcierge_faq_source' ) ) {
	function careconcierge_faq_source( $vertical = null ) {
		$vertical = $vertical ?: careconcierge_schema_vertical();

		$banks = array(
			'surgeons' => array(
				array(
					'question' => '24 / 7 / 365 response coverage',
					'answer'   => 'Plastic surgery enquiries rarely arrive when the practice is perfectly ready for them. They arrive after a patient has stared at her reflection for too long, after a weight-loss milestone, after pregnancy, after a quiet evening of research into breast reduction, abdominoplasty, facelift, blepharoplasty, or body contouring. CareConcierge gives the practice a permanent first-response layer, so serious enquiries are acknowledged while intent is still warm. The patient is not left waiting until Monday, the coordinator is not starting from cold, and the practice no longer depends on office hours to protect high-value demand.',
				),
				array(
					'question' => 'Regulator-aware content',
					'answer'   => 'Elective surgery sits in a more delicate communication environment than ordinary consumer services. Patients want answers about suitability, recovery, pricing, scars, timing, and expected outcomes — precisely the areas where a practice must be careful, measured, and clinically responsible. CareConcierge responds from approved practice content and defined boundaries, helping the conversation stay useful without drifting into claims, promises, or advice that should only happen in consultation. It supports commercial responsiveness while respecting the seriousness of surgical decision-making.',
				),
				array(
					'question' => 'Warm handoff to the practice team',
					'answer'   => 'A high-value enquiry should not land with the team as a vague name, a phone number, and a mystery. CareConcierge prepares a warmer handoff: procedure interest, motivation, timing, concerns, decision readiness, preferred contact method, and the questions already asked. For the coordinator, that means less chasing and more meaningful follow-up. For the surgeon, it means the front end of the practice begins to reflect the precision of the clinical work itself. A patient interested in a facelift, breast reduction, or post-weight-loss body contouring should arrive at the next step feeling understood, not processed.',
				),
				array(
					'question' => 'Lapsed-enquiry reactivation',
					'answer'   => 'Every established surgical practice has sleeping beauties: patients who enquired about a procedure, hesitated, postponed, compared options, worried about recovery, or simply disappeared before the right conversation could happen. CareConcierge helps identify and carefully reawaken those cooled enquiries with practice-approved, regulator-aware follow-up that feels considered rather than desperate. This is especially powerful in plastic surgery, where decisions often take months, not minutes. A lapsed abdominoplasty or breast reduction enquiry may not be lost demand. It may be delayed intent waiting for the right moment, the right tone, and the right invitation back into conversation.',
				),
				array(
					'question' => 'Built for private elective care',
					'answer'   => 'Private elective surgery is not a normal appointment-booking environment. It blends aspiration, anxiety, discretion, clinical caution, and significant financial commitment before the patient ever walks through the door. CareConcierge is built for that reality. It does not treat every enquiry as ready to buy, nor every patient as just another lead. It helps the practice respond with speed, restraint, and intelligence across the delicate early-stage conversations that shape trust: breast surgery, facial rejuvenation, body contouring, revision interest, recovery questions, pricing uncertainty, and suitability concerns. The result is a front-end experience that feels more aligned with the calibre of the practice.',
				),
			),
			'dentists' => array(
				array(
					'question' => '24 / 7 / 365 response coverage',
					'answer'   => 'Dental enquiries rarely arrive when the practice is perfectly ready for them. They arrive after a wedding date is set, after a milestone birthday, after an unkind photograph, after a child has begun asking the same question, or after a quiet evening of research into aligners, implants, veneers, smile design, or comprehensive restorative work. CareConcierge gives the practice a permanent first-response layer, so serious enquiries are acknowledged while intent is still warm. The patient is not left waiting until Monday, the treatment coordinator is not starting from cold, and the practice no longer depends on office hours to protect high-value demand.',
				),
				array(
					'question' => 'Regulator-aware content',
					'answer'   => 'Private dentistry sits in a more delicate communication environment than ordinary consumer services. Patients want answers about suitability, treatment timing, pricing, recovery, and expected outcomes — precisely the areas where a practice must be careful, measured, and clinically responsible. CareConcierge responds from approved practice content and defined boundaries, helping the conversation stay useful without drifting into claims, promises, or advice that should only happen in consultation. It supports commercial responsiveness while respecting the seriousness of clinical decision-making.',
				),
				array(
					'question' => 'Warm handoff to the practice team',
					'answer'   => 'A high-value enquiry should not land with the team as a vague name, a phone number, and a mystery. CareConcierge prepares a warmer handoff: treatment interest, motivation, timing, concerns, decision readiness, preferred contact method, and the questions already asked. For the treatment coordinator, that means less chasing and more meaningful follow-up. For the principal, it means the front end of the practice begins to reflect the precision of the clinical work itself. A patient interested in aligners, full-mouth restorative work, or a smile design should arrive at the next step feeling understood, not processed.',
				),
				array(
					'question' => 'Lapsed-enquiry reactivation',
					'answer'   => 'Every established dental practice has sleeping beauties: patients who enquired about a treatment, hesitated, postponed, compared options, worried about cost or recovery, or simply disappeared before the right conversation could happen. CareConcierge helps identify and carefully reawaken those cooled enquiries with practice-approved, regulator-aware follow-up that feels considered rather than desperate. This is especially powerful in private dentistry, where decisions often take months, not minutes. A lapsed implant or aligner enquiry may not be lost demand. It may be delayed intent waiting for the right moment, the right tone, and the right invitation back into conversation.',
				),
				array(
					'question' => 'Built for private dental care',
					'answer'   => 'Private dentistry is not a normal appointment-booking environment. It blends aspiration, anxiety, discretion, clinical caution, and significant financial commitment before the patient ever sits in the chair. CareConcierge is built for that reality. It does not treat every enquiry as ready to book, nor every patient as just another lead. It helps the practice respond with speed, restraint, and intelligence across the delicate early-stage conversations that shape trust: implants, aligners, veneers, smile design, restorative work, hygiene questions, pricing uncertainty, and suitability concerns. The result is a front-end experience that feels more aligned with the calibre of the practice.',
				),
			),
			'medical' => array(
				array(
					'question' => '24 / 7 / 365 response coverage',
					'answer'   => 'Specialist enquiries rarely arrive when the clinic is perfectly ready for them. They arrive after a referral letter, after a difficult appointment elsewhere, after months of quiet research into a fertility question, a hearing concern, a vision change, a skin investigation, a hormone review, or a chronic pain that has lasted long enough. CareConcierge gives the practice a permanent first-response layer, so serious enquiries are acknowledged while intent is still warm. The patient is not left waiting until Monday, the coordinator is not starting from cold, and the practice no longer depends on office hours to protect high-value demand.',
				),
				array(
					'question' => 'Regulator-aware content',
					'answer'   => 'Private specialist medicine sits in a more delicate communication environment than ordinary consumer services. Patients want answers about suitability, prognosis, pricing, timing, and expected outcomes — precisely the areas where a practice must be careful, measured, and clinically responsible. CareConcierge responds from approved practice content and defined boundaries, helping the conversation stay useful without drifting into claims, promises, or advice that should only happen in consultation. It supports commercial responsiveness while respecting the seriousness of clinical decision-making.',
				),
				array(
					'question' => 'Warm handoff to the practice team',
					'answer'   => 'A high-value enquiry should not land with the team as a vague name, a phone number, and a mystery. CareConcierge prepares a warmer handoff: clinical interest, motivation, timing, concerns, decision readiness, preferred contact method, and the questions already asked. For the coordinator, that means less chasing and more meaningful follow-up. For the principal, it means the front end of the practice begins to reflect the precision of the clinical work itself. A patient interested in a fertility consultation, a dermatology investigation, or a private GP membership should arrive at the next step feeling understood, not processed.',
				),
				array(
					'question' => 'Lapsed-enquiry reactivation',
					'answer'   => 'Every established specialist clinic has sleeping beauties: patients who enquired about a consultation, hesitated, postponed, compared options, worried about cost or commitment, or simply disappeared before the right conversation could happen. CareConcierge helps identify and carefully reawaken those cooled enquiries with practice-approved, regulator-aware follow-up that feels considered rather than desperate. This is especially powerful in private specialist medicine, where decisions often take months, not minutes. A lapsed fertility or vision-correction enquiry may not be lost demand. It may be delayed intent waiting for the right moment, the right tone, and the right invitation back into conversation.',
				),
				array(
					'question' => 'Built for private specialist care',
					'answer'   => 'Private specialist medicine is not a normal appointment-booking environment. It blends aspiration, anxiety, discretion, clinical caution, and significant financial commitment before the patient ever walks through the door. CareConcierge is built for that reality. It does not treat every enquiry as ready to book, nor every patient as just another lead. It helps the practice respond with speed, restraint, and intelligence across the delicate early-stage conversations that shape trust: fertility, dermatology, hearing, vision, hormone health, weight and metabolic medicine, physiotherapy, and concierge GP membership. The result is a front-end experience that feels more aligned with the calibre of the practice.',
				),
			),
		);
		return isset( $banks[ $vertical ] ) ? $banks[ $vertical ] : $banks['surgeons'];
	}
}

/**
 * Build the Organization schema node. Reused by anything that needs
 * to reference the company (e.g. WebSite.publisher).
 */
if ( ! function_exists( 'careconcierge_schema_organization' ) ) {
	function careconcierge_schema_organization() {
		return array(
			'@type'         => 'Organization',
			'@id'           => CARECONCIERGE_CANONICAL_HOST . '/#organization',
			'name'          => 'CareConcierge Health',
			'legalName'     => 'CareConcierge Pty Ltd',
			'url'           => CARECONCIERGE_CANONICAL_HOST . '/',
			'logo'          => CARECONCIERGE_CANONICAL_HOST . '/wp-content/themes/careconcierge/assets/images/brand/careconcierge-logo-ink.svg',
			'email'         => 'care@careconcierge.health',
			'address'       => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => 'PO Box 944',
				'addressLocality' => 'Paradise Point',
				'addressRegion'   => 'Queensland',
				'postalCode'      => '4216',
				'addressCountry'  => 'AU',
			),
			'areaServed'    => array(
				array( '@type' => 'Country', 'name' => 'Australia' ),
				array( '@type' => 'Country', 'name' => 'United Kingdom' ),
				array( '@type' => 'Country', 'name' => 'United States' ),
			),
			/* sameAs deliberately omitted — no official social profiles
			   have been confirmed yet. Add as an array of full URLs
			   here when verified profiles are supplied. */
		);
	}
}

/**
 * Build the Service schema node. Carefully phrased — describes what
 * CareConcierge does for the practice, not anything clinical.
 */
if ( ! function_exists( 'careconcierge_schema_service' ) ) {
	function careconcierge_schema_service() {
		return array(
			'@type'         => 'Service',
			'@id'           => CARECONCIERGE_CANONICAL_HOST . '/#service',
			'name'          => 'Patient communication infrastructure for private elective practice',
			'serviceType'   => 'Patient communication and enquiry conversion infrastructure',
			'description'   => 'CareConcierge helps private practices respond to patient enquiries, qualify intent, prepare warm handoffs, re-engage lapsed enquiries, and produce monthly Conversion Intelligence reporting.',
			'provider'      => array( '@id' => CARECONCIERGE_CANONICAL_HOST . '/#organization' ),
			'areaServed'    => array(
				array( '@type' => 'Country', 'name' => 'Australia' ),
				array( '@type' => 'Country', 'name' => 'United Kingdom' ),
				array( '@type' => 'Country', 'name' => 'United States' ),
			),
			'audience'      => array(
				'@type'         => 'BusinessAudience',
				'audienceType'  => 'Private elective practices, private surgical practices, principals, practice managers, and patient coordinators',
			),
		);
	}
}

/**
 * Build the FAQPage schema node from the canonical FAQ source for the
 * current vertical. Mirrors the visible accordion verbatim so schema
 * and page stay in sync.
 */
if ( ! function_exists( 'careconcierge_schema_faqpage' ) ) {
	function careconcierge_schema_faqpage() {
		$vertical = careconcierge_schema_vertical();
		$slug_for_id = array(
			'surgeons' => '/surgeons/#faq',
			'dentists' => '/dentists/#faq',
			'medical'  => '/medical/#faq',
		);
		$entities = array();
		foreach ( careconcierge_faq_source( $vertical ) as $i => $row ) {
			$entities[] = array(
				'@type'          => 'Question',
				'name'           => $row['question'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $row['answer'],
				),
			);
		}
		return array(
			'@type'      => 'FAQPage',
			'@id'        => CARECONCIERGE_CANONICAL_HOST . $slug_for_id[ $vertical ],
			'mainEntity' => $entities,
		);
	}
}

/**
 * Build the DigitalDocument schema node for the sample Conversion
 * Intelligence Report PDF. Avoids any clinical / financial claim.
 */
if ( ! function_exists( 'careconcierge_schema_sample_report' ) ) {
	function careconcierge_schema_sample_report() {
		$pdf_url = CARECONCIERGE_CANONICAL_HOST . '/wp-content/themes/careconcierge/assets/documents/sample-report.pdf';
		return array(
			'@type'         => 'DigitalDocument',
			'@id'           => CARECONCIERGE_CANONICAL_HOST . '/#sample-report',
			'name'          => 'CareConcierge Conversion Intelligence Report',
			'description'   => 'A sample monthly report showing enquiry response, qualification, warm handoff quality, lapsed-enquiry recovery, estimated value protected, and front-end practice leakage signals.',
			'url'           => $pdf_url,
			'encodingFormat'=> 'application/pdf',
			'inLanguage'    => 'en-AU',
			'publisher'     => array( '@id' => CARECONCIERGE_CANONICAL_HOST . '/#organization' ),
		);
	}
}

/**
 * Build the WebSite schema node.
 */
if ( ! function_exists( 'careconcierge_schema_website' ) ) {
	function careconcierge_schema_website() {
		return array(
			'@type'         => 'WebSite',
			'@id'           => CARECONCIERGE_CANONICAL_HOST . '/#website',
			'url'           => CARECONCIERGE_CANONICAL_HOST . '/',
			'name'          => 'CareConcierge Health',
			'description'   => 'Patient communication infrastructure for private elective practice.',
			'publisher'     => array( '@id' => CARECONCIERGE_CANONICAL_HOST . '/#organization' ),
			'inLanguage'    => 'en-AU',
		);
	}
}

/**
 * Build the WebPage schema node for the current request, using the
 * SEO metadata helper as the source of truth for title / description /
 * canonical so the two layers never drift.
 */
if ( ! function_exists( 'careconcierge_schema_webpage' ) ) {
	function careconcierge_schema_webpage() {
		$meta = function_exists( 'careconcierge_seo_meta_for_request' )
			? careconcierge_seo_meta_for_request()
			: array(
				'title'       => wp_get_document_title(),
				'description' => '',
				'canonical'   => CARECONCIERGE_CANONICAL_HOST . '/',
				'og_image'    => '',
			);

		$node = array(
			'@type'         => 'WebPage',
			'@id'           => $meta['canonical'] . '#webpage',
			'url'           => $meta['canonical'],
			'name'          => $meta['title'],
			'description'   => $meta['description'],
			'isPartOf'      => array( '@id' => CARECONCIERGE_CANONICAL_HOST . '/#website' ),
			'about'         => array( '@id' => CARECONCIERGE_CANONICAL_HOST . '/#service' ),
			'inLanguage'    => 'en-AU',
		);
		if ( ! empty( $meta['og_image'] ) ) {
			$node['primaryImageOfPage'] = array(
				'@type' => 'ImageObject',
				'url'   => $meta['og_image'],
			);
		}
		return $node;
	}
}

/**
 * Print the combined JSON-LD payload into <head>. Hooked once,
 * after the SEO meta tags. The @graph wrapper keeps every type in
 * a single <script> so search engines can resolve cross-references
 * (e.g. WebSite.publisher → Organization @id).
 */
if ( ! function_exists( 'careconcierge_print_jsonld' ) ) {
	function careconcierge_print_jsonld() {
		$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) : '/';
		$path = '/' . trim( (string) $path, '/' );
		$vertical_paths = array(
			'/', '/surgeons', '/surgeons/',
			'/dentists', '/dentists/',
			'/medical', '/medical/',
		);
		$is_vertical = in_array( $path, $vertical_paths, true );

		$graph = array(
			careconcierge_schema_organization(),
			careconcierge_schema_website(),
			careconcierge_schema_webpage(),
		);
		/* Service / FAQPage / DigitalDocument are tied to the master
		   page composition. Emit them on every vertical URL that
		   renders that composition (home + /surgeons/ + /dentists/ +
		   /medical/) — but not on unrelated future URLs, which
		   would otherwise misrepresent themselves. The FAQPage
		   schema picks up the right vertical's accordion via
		   careconcierge_schema_vertical(). */
		if ( $is_vertical ) {
			$graph[] = careconcierge_schema_service();
			$graph[] = careconcierge_schema_faqpage();
			$graph[] = careconcierge_schema_sample_report();
		}

		$payload = array(
			'@context' => 'https://schema.org',
			'@graph'   => $graph,
		);

		$json = wp_json_encode(
			$payload,
			JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
		);
		if ( false === $json ) { return; }

		echo "\n<!-- CareConcierge JSON-LD -->\n";
		echo "<script type=\"application/ld+json\">\n" . $json . "\n</script>\n";
		echo "<!-- /CareConcierge JSON-LD -->\n";
	}
}
add_action( 'wp_head', 'careconcierge_print_jsonld', 7 );
