import { cn } from '@/lib/utils';
import React from 'react'

export default function widget(className, ...props) {
    const { bgColor, count, icon, title } = props;
  return (
    <div className={cn(
        'relative overflow-hidden rounded-lg border bg-white px-4 pb-6 pt-5 sm:pt-6'
    )}>
        <div>
            <div className={cn('absolute rounded-2xl p-3, bgColor')}>{icon}</div>
            <p className='ml-16 text-sm truncate font medium text-muted-foreground'>{title}</p>
        </div>
        <div className='flex items-baseline ml-16'>
            <p className='text-2xl font-semibold text-foreground'>{count}</p>
        </div>
    </div>
  )
}

