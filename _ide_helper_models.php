<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class Cart
 * 
 * Represents a shopping cart associated with a user.
 *
 * @package App\Models
 * @property int $id Unique identifier for the cart.
 * @property string $user_identifier Unique identifier for the user (can be session-based or user ID).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the cart was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the cart was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserIdentifier($value)
 * @mixin \Eloquent
 */
	class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CartItem
 * 
 * Represents an item within a shopping cart.
 *
 * @package App\Models
 * @property int $id Unique identifier for the cart item.
 * @property int $cart_id Identifier for the associated cart.
 * @property int $product_id Identifier for the associated product.
 * @property int $quantity Quantity of the product in the cart.
 * @property float $price Price of the product at the time of adding to the cart.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the cart item was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the cart item was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem query()
 * @property-read \App\Models\Cart $cart
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CartItem extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Category
 * 
 * Represents a category for organizing products or content.
 *
 * @package App\Models
 * @property int $id Unique identifier for the category.
 * @property string $name Name of the category.
 * @property string|null $description Optional description of the category.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the category was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the category was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property bool $isLocked
 * @property float $itemNumber
 * @property string|null $omekaIdentifier
 * @property string $workflow
 * @property string|null $creator
 * @property string $title
 * @property string|null $publisher
 * @property string|null $occasion
 * @property string|null $place
 * @property string|null $dateOfPublication
 * @property string|null $typeOfDocument
 * @property string|null $subject
 * @property string|null $description
 * @property string|null $physicalLocation
 * @property string|null $media
 * @property string|null $jpegPreviewPath
 * @property bool $isJpegUploaded
 * @property string|null $downloadFile
 * @property bool $isFileUploaded
 * @property string|null $driveURL
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $jpegDateUpload
 * @property \Illuminate\Support\Carbon|null $fileDateUpload
 * @property int|null $copyright_id
 * @property bool $isWordFileUploaded
 * @property string|null $wordFileUrl
 * @property \Illuminate\Support\Carbon|null $wordFileDateUpload
 * @property string|null $originalFileName
 * @property string|null $notes
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection query()
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereCopyrightId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDateOfPublication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDownloadFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDriveURL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereFileDateUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsFileUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsJpegUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsWordFileUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereItemNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereJpegDateUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereJpegPreviewPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereMedia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereOccasion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereOmekaIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereOriginalFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection wherePhysicalLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection wherePublisher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereTypeOfDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereWordFileDateUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereWordFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereWorkflow($value)
 * @mixin \Eloquent
 * @property string|null $full_text_content
 * @property string|null $full_text_vector
 * @property int|null $series_id
 * @property bool $isProblematic
 * @property string|null $problematicNotes
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereFullTextContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereFullTextVector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsProblematic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereProblematicNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereSeriesId($value)
 */
	class DigitalCollection extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ErrorLog
 * 
 * Represents a log entry for application errors.
 *
 * @package App\Models
 * @property int $id Unique identifier for the error log entry.
 * @property string $error_message The error message describing the issue.
 * @property string|null $stack_trace The stack trace of the error (if available).
 * @property int|null $error_code The error code associated with the issue (if applicable).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the error was logged.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the log entry was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereErrorCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereErrorMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereStackTrace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ErrorLog extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Faq
 * 
 * Represents a Frequently Asked Question (FAQ) entry.
 *
 * @package App\Models
 * @property int $id Unique identifier for the FAQ entry.
 * @property string $question The question being asked.
 * @property string $answer The answer to the question.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the FAQ was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the FAQ was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Faq extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Member
 * 
 * Represents a registered member with personal details and membership information.
 *
 * @package App\Models
 * @property int $id Unique identifier for the member.
 * @property int $user_id Identifier for the associated user.
 * @property string $first_name First name of the member.
 * @property string $last_name Last name of the member.
 * @property string $email Email address of the member.
 * @property string|null $phone_number Contact phone number.
 * @property string|null $address_line_1 Primary address line.
 * @property string|null $address_line_2 Secondary address line (if any).
 * @property string|null $zipcode Postal code of the address.
 * @property string|null $state State or region of residence.
 * @property string|null $country Country of residence.
 * @property \Illuminate\Support\Carbon|null $membership_start_date Date when the membership started.
 * @property \Illuminate\Support\Carbon|null $membership_end_date Date when the membership expires.
 * @property bool $active_status Indicates if the membership is currently active.
 * @property string|null $membership_plan Type of membership plan subscribed to.
 * @property bool $isYear Indicates if the membership plan is based on a yearly subscription.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the member was registered.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the member record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Membership> $memberships
 * @property-read int|null $memberships_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereActiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereIsYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMembershipEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMembershipPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMembershipStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereZipcode($value)
 * @mixin \Eloquent
 * @property string|null $old_membership_id
 * @property bool $is_recurring
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereIsRecurring($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereOldMembershipId($value)
 */
	class Member extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Membership
 * 
 * Represents a membership subscription for a user.
 *
 * @package App\Models
 * @property int $id Unique identifier for the membership.
 * @property int $user_id Identifier for the associated user.
 * @property string $membership_plan Type of membership plan subscribed to.
 * @property float $price Cost of the membership.
 * @property \Illuminate\Support\Carbon|null $start_date Date when the membership started.
 * @property \Illuminate\Support\Carbon|null $end_date Date when the membership expires.
 * @property bool $is_active Indicates if the membership is currently active.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the membership was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the membership record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @property-read \App\Models\Member $member
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereMembershipPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUserId($value)
 * @mixin \Eloquent
 */
	class Membership extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Order
 * 
 * Represents a customer order containing multiple order items.
 *
 * @package App\Models
 * @property int $id Unique identifier for the order.
 * @property string $order_number Unique order reference number.
 * @property string $customer_name Name of the customer who placed the order.
 * @property string $customer_email Email address of the customer.
 * @property float $total Total cost of the order.
 * @property float|null $shipment_cost Cost of shipping the order.
 * @property string $address Shipping address of the order.
 * @property string|null $address_complement Additional address details (e.g., apartment, suite).
 * @property string $city City where the order is being shipped.
 * @property string $state State or region where the order is being shipped.
 * @property string $zipcode Postal code of the shipping address.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the order was placed.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the order record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @property string|null $tracking_number
 * @property string $order_status
 * @property string|null $status_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, OrderItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddressComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShipmentCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatusDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereZipcode($value)
 * @mixin \Eloquent
 * @property string $super_total
 * @property string $tax_amount
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSuperTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTaxAmount($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * Class OrderItem
 * 
 * Represents an individual item within a customer order.
 *
 * @package App\Models
 * @property int $id Unique identifier for the order item.
 * @property int $order_id Identifier for the associated order.
 * @property int $product_id Identifier for the associated product.
 * @property int $quantity Quantity of the product ordered.
 * @property float $price Price of the product at the time of the order.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the order item was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the order item record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem query()
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class OrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Payment
 * 
 * Represents a payment transaction within the system.
 *
 * @package App\Models
 * @property int $id Unique identifier for the payment.
 * @property string $first_name First name of the payer.
 * @property string $last_name Last name of the payer.
 * @property string $email Email address of the payer.
 * @property float $amount Payment amount.
 * @property string $type Type of payment (e.g., subscription, one-time).
 * @property string|null $program Program or service associated with the payment.
 * @property string|null $stripe_payment_intent_id Stripe Payment Intent identifier.
 * @property string|null $payment_method Payment method used (e.g., credit card, PayPal).
 * @property string $currency Currency of the payment (e.g., USD, EUR).
 * @property string $status Status of the payment (e.g., pending, completed, failed).
 * @property string|null $receipt_url URL to the payment receipt.
 * @property string|null $customer_id Identifier for the customer in the payment gateway.
 * @property \Illuminate\Support\Carbon|null $payment_date Date when the payment was processed.
 * @property float|null $shipment_cost Cost associated with shipping (if applicable).
 * @property bool $isRecurring Indicates whether the payment is recurring.
 * @property string|null $processed_by Identifier of the user or system that processed the
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the payment record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string $tax
 * @property string $totalAmount
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereIsRecurring($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereProcessedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereReceiptUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereShipmentCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStripePaymentIntentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PortalContent> $portalContents
 * @property-read int|null $portal_contents_count
 * @method static \Illuminate\Database\Eloquent\Builder|PortalCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortalCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortalCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PortalCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalCategory whereUpdatedAt($value)
 */
	class PortalCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PortalContent
 * 
 * Represents content published on the portal, such as media, articles, or resources.
 *
 * @package App\Models
 * @property int $id Unique identifier for the portal content.
 * @property string $title Title of the content.
 * @property string $creator Name of the content creator or author.
 * @property string|null $description Brief description of the content.
 * @property string|null $tags Comma-separated tags associated with the content.
 * @property string $url URL or link to the content.
 * @property string $media_type Type of media (e.g., video, article, image).
 * @property string $category Category under which the content is classified.
 * @property string|null $program Associated program or initiative.
 * @property string|null $permission_level Access level required to view the content.
 * @property string|null $contact Contact information related to the content.
 * @property string|null $occasion Special occasion or event related to the content.
 * @property \Illuminate\Support\Carbon|null $date_of_publication Date when the content was published.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the content was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the content was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent query()
 * @property string|null $event
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereDateOfPublication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereMediaType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereOccasion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent wherePermissionLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortalContent whereUrl($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PortalCategory> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Program> $programs
 * @property-read int|null $programs_count
 */
	class PortalContent extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Post
 * 
 * Represents a multilingual blog post or article.
 *
 * @package App\Models
 * @property int $id Unique identifier for the post.
 * @property string $title_en Title of the post in English.
 * @property string|null $title_es Title of the post in Spanish.
 * @property string|null $title_pt Title of the post in Portuguese.
 * @property string $content_en Content of the post in English.
 * @property string|null $content_es Content of the post in Spanish.
 * @property string|null $content_pt Content of the post in Portuguese.
 * @property string $slug URL-friendly identifier for the post.
 * @property bool $published Indicates if the post is published.
 * @property \Illuminate\Support\Carbon|null $published_at Timestamp when the post was published.
 * @property \Illuminate\Support\Carbon|null $date Date associated with the post (e.g., event date).
 * @property string|null $summary_en Summary of the post in English.
 * @property string|null $summary_es Summary of the post in Spanish.
 * @property string|null $summary_pt Summary of the post in Portuguese.
 * @property string|null $image_url URL of the post’s featured image.
 * @property int $post_type_id Identifier for the post type.
 * @property string|null $file_url URL of an attached file (English version).
 * @property string|null $file_url_es URL of an attached file (Spanish version).
 * @property string|null $file_url_ptBR URL of an attached file (Portuguese-BR version).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the post was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the post was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @property-read \App\Models\PostType $postType
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContentEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContentEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContentPt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFileUrlEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFileUrlPtBR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSummaryEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSummaryEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSummaryPt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitleEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitlePt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $button_text_en
 * @property string|null $button_text_es
 * @property string|null $button_text_pt
 * @property string|null $external_link
 * @property string|null $external_link_button
 * @property \Illuminate\Support\Carbon|null $date_of_publication
 * @property \Illuminate\Support\Carbon|null $date_of_event
 * @property-read string $plain_summary
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereButtonTextEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereButtonTextEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereButtonTextPt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDateOfEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDateOfPublication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereExternalLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereExternalLinkButton($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|PostType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PostType extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Product
 * 
 * Represents a product available for purchase.
 *
 * @package App\Models
 * @property int $id Unique identifier for the product.
 * @property string $name Name of the product.
 * @property string|null $description Detailed description of the product.
 * @property float $price Price of the product.
 * @property int $stock Quantity of the product available in stock.
 * @property string $sku Stock Keeping Unit (SKU) identifier for the product.
 * @property string|null $type Type or category of the product.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the product was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the product was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @property string|null $image
 * @property string|null $weight
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $cartItems
 * @property-read int|null $cart_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWeight($value)
 * @mixin \Eloquent
 * @property string|null $book_no
 * @property string|null $author
 * @property string|null $publisher
 * @property int|null $year_of_publication
 * @property string|null $shelf_location
 * @property int $storage_1_office
 * @property int $storage_2_almacen
 * @property string|null $printer_cost
 * @property string|null $isbn
 * @property string|null $notes
 * @property string|null $costo_invertido_q
 * @property string|null $costo_y_venta
 * @property string|null $porcentaje_margen
 * @property string|null $contrato_editorial
 * @property string|null $contrato_regalias
 * @property string|null $permiso
 * @property string|null $reimpresion
 * @property string|null $stop
 * @property string|null $baja_destruccion
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBajaDestruccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBookNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereContratoEditorial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereContratoRegalias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCostoInvertidoQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCostoYVenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsbn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePermiso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePorcentajeMargen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrinterCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePublisher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereReimpresion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShelfLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStorage1Office($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStorage2Almacen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereYearOfPublication($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PortalContent> $portalContents
 * @property-read int|null $portal_contents_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Testimonial> $testimonials
 * @property-read int|null $testimonials_count
 * @method static \Illuminate\Database\Eloquent\Builder|Program newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program query()
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereUpdatedAt($value)
 */
	class Program extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Role
 * 
 * Represents a user role within the system, defining permissions and access levels.
 *
 * @package App\Models
 * @property int $id Unique identifier for the role.
 * @property string $name Name of the role (e.g., admin, editor, user).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the role was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the role was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Shipping
 * 
 * Represents shipping costs associated with orders.
 *
 * @package App\Models
 * @property int $id Unique identifier for the shipping cost entry.
 * @property string $region The region or zone where the shipping cost applies.
 * @property float $cost The shipping cost for the specified region.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the shipping cost entry was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the shipping cost entry was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping query()
 * @property int $zone
 * @property string $weight
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereZone($value)
 * @mixin \Eloquent
 */
	class Shipping extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $title_en
 * @property string|null $title_es
 * @property string|null $title_pt
 * @property string|null $description_en
 * @property string|null $description_es
 * @property string|null $description_pt
 * @property string|null $photo_url
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker query()
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereDescriptionEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereDescriptionPt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker wherePhotoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereTitleEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereTitlePt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speaker whereUpdatedAt($value)
 */
	class Speaker extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $program_id
 * @property string|null $image_url
 * @property string $name
 * @property string|null $title
 * @property string|null $text_en
 * @property string|null $text_es
 * @property string|null $text_pt
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Program $program
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereProgramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTextEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTextEs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTextPt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 */
	class Testimonial extends \Eloquent {}
}

namespace App\Models{
/**
 * Class User
 * 
 * Represents an authenticated user of the application.
 *
 * @package App\Models
 * @property int $id Unique identifier for the user.
 * @property string $name Full name of the user.
 * @property string $email Email address of the user.
 * @property string $password Hashed password for authentication.
 * @property \Illuminate\Support\Carbon|null $email_verified_at Timestamp when the email was verified.
 * @property string|null $remember_token Token for remembering user sessions.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the user was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the user record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @property int|null $institution_id
 * @property string|null $force_password_reset_token
 * @property-read \App\Models\Member|null $member
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereForcePasswordResetToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * Class UspsMediaMailShipping
 * 
 * Represents USPS Media Mail shipping details and costs.
 *
 * @package App\Models
 * @property int $id Unique identifier for the shipping record.
 * @property float $cost Cost of the USPS Media Mail shipping.
 * @property string|null $delivery_time Estimated delivery time for Media Mail shipments.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the shipping record was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the shipping record was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping query()
 * @property string $weight_not_over
 * @property string $rate
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UspsMediaMailShipping whereWeightNotOver($value)
 * @mixin \Eloquent
 */
	class UspsMediaMailShipping extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $name
 * @property string $email
 * @property string|null $organization
 * @property string|null $zipcode
 * @property string|null $phone_number
 * @property string|null $language
 * @property string|null $denomination
 * @property \Illuminate\Support\Carbon|null $member_since
 * @property bool $isAethMember
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property bool $young_lideres_membership
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres query()
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereDenomination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereIsAethMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereMemberSince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereOrganization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereYoungLideresMembership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YoungLideres whereZipcode($value)
 */
	class YoungLideres extends \Eloquent {}
}

