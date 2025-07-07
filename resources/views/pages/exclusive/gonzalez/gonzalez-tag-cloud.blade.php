@extends('layouts.admin-gonzalez')

@section('title', 'Gonzalez Tag Cloud')

@section('content')
    <h2 class="text-primary text-center">@lang('dashboard.tag_cloud') </h2>
    <style>
        .tag-wrapper {
            padding: 60px 15px;
            display: flex;
            justify-content: center;
        }

        .tag-cloud {
            padding: 30px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            text-align: center;
        }


        .tag-cloud {
            padding: 30px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .tag {
            display: inline-block;
            padding: 8px 16px;
            margin: 6px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            user-select: none;
        }

        .size-1 {
            font-size: 12px;
        }

        .size-2 {
            font-size: 16px;
        }

        .size-3 {
            font-size: 20px;
        }

        .size-4 {
            font-size: 24px;
        }

        .size-5 {
            font-size: 28px;
        }

        .color-1 {
            background: #FF6B6B;
            color: white;
        }

        .color-2 {
            background: #4ECDC4;
            color: white;
        }

        .color-3 {
            background: #45B7D1;
            color: white;
        }

        .color-4 {
            background: #96CEB4;
            color: white;
        }

        .color-5 {
            background: #9B59B6;
            color: white;
        }

        .tag:hover {
            transform: translateY(-3px) rotate(2deg);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .tag.selected {
            animation: pulse 0.3s ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .tag-count {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 6px;
            border-radius: 10px;
            font-size: 0.8em;
            margin-left: 5px;
        }

        @media (max-width: 600px) {
            .tag-cloud {
                padding: 20px;
                margin: 15px;
            }

            .tag {
                padding: 6px 12px;
                margin: 4px;
            }
        }
    </style>

    <div class="tag-wrapper">
        <div class="tag-cloud"></div>
    </div>

    @php
        $tagCounts = [];
        foreach ($digitalCollections as $item) {
            $tags = explode('|', $item->subject);
            foreach ($tags as $tag) {
                $tag = trim($tag);
                if ($tag) {
                    $tagCounts[$tag] = ($tagCounts[$tag] ?? 0) + 1;
                }
            }
        }

        $max = max($tagCounts);
        $min = min($tagCounts);

        function getSize($count, $min, $max)
        {
            if ($max == $min)
                return 3;
            $normalized = ($count - $min) / ($max - $min);
            return ceil($normalized * 4) + 1;
        }

        $tagsArray = [];
        foreach ($tagCounts as $tag => $count) {
            $tagsArray[] = [
                'text' => $tag,
                'size' => getSize($count, $min, $max),
                'count' => $count,
            ];
        }
    @endphp

    <script>
        const tags = {!! json_encode($tagsArray, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!};

        const tagCloud = document.querySelector('.tag-cloud');
        const shuffledTags = [...tags].sort(() => Math.random() - 0.5);

        shuffledTags.forEach((tag, index) => {
            const tagElement = document.createElement('span');
            tagElement.className = `tag size-${tag.size} color-${(index % 5) + 1}`;
            tagElement.innerHTML = `${tag.text}<span class="tag-count">${tag.count}</span>`;

            tagElement.addEventListener('click', function () {
                window.location.href = `/tag-cloud/filter?tag=${encodeURIComponent(tag.text)}`;
            });

            tagCloud.appendChild(tagElement);
        });

        document.querySelectorAll('.tag').forEach(tag => {
            tag.style.transform = `rotate(${(Math.random() * 6) - 3}deg)`;
        });
    </script>
@endsection